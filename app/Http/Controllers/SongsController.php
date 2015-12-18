<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use App\SongComment;
use App\Http\Requests\CreateSongRequest;
use App\Http\Requests\CreateCommentRequest;

class SongsController extends Controller
{
    private $song;
    private $comment;

    public function __construct(Song $song, SongComment $comment){
        $this->song = $song;
        $this->comment = $comment;
    }

    public function index()
    {
        $songs = $this->song->get();
        return view('songs.index', compact('songs'));
    }

    public function create(){
        return view('songs.create');
    }

    public function store(CreateSongRequest $request, Song $song){
        $song->title = $request->get('title');
        $song->lyrics = $request->get('lyrics');

        //construct slug
        $song->slug = $this->createSlug($song->title);

        //save new song and lyrics
        $song->save();

        return redirect()->action('SongsController@index');
    }

    public function show($slug)
    {
        //get songs
        $song = $this->song->where('slug', $slug)->first();
        
        //get lyrics
        if ($song == null) {
            $lyric = "Unavailable";
        } else {
            if ($song->lyrics == null) {
                $filename = base_path('resources/assets/'.$this->getLyrics($song->id));    
                if (file_exists($filename)) {
                    $lyric = file_get_contents($filename);    
                } else {
                    $lyric = "Unavailable";
                }
            } else {
                $lyric = $song->lyrics;
            }
        }

        //get comments
        $comments = $song->comments;

        return view('songs.show', ['song' => $song, 'lyric' => $lyric, 'comments' => $comments]);
    }

    public function edit($slug)
    {
        $song = $this->song->where('slug', $slug)->first();
        return view('songs.edit', compact('song'));
    }

    public function update(CreateSongRequest $request, $slug)
    {
        $song = $this->song->whereSlug($slug)->first();
        
        $song->slug = $this->createSlug($song->title); 
        $song->title = $request->get('title');   
        $song->lyrics = $request->get('lyrics');
        
        $song->save();
        return redirect()->action('SongsController@index');
    }

    public function destroy($slug)
    {
        $this->song->where('slug', $slug)->first()->delete();
        return redirect()->action('SongsController@index');
    }

    public function addComment(CreateCommentRequest $request, SongComment $comment, $slug)
    {
         $comment->songs_id = $this->song->whereSlug($slug)->first()->id;
         $comment->author = $request->get('author');
         $comment->comment = $request->get('comment');

         $comment->save();

        return redirect()->action('SongsController@show', [$slug]);

    }

    private function getLyrics($id)
    {
        $id = $id - 1;
        $lyrics = ["baby.txt", "boyfriend.txt", "As long as you love me.txt", "Never say never.txt", "confident.txt"];
        return $lyrics[$id];
    }

    private function createSlug($song_title)
    {
        $title = strtolower(trim($song_title));
        $explode_tit = explode(" ", $title);
        $slug = implode("-", $explode_tit);
        return $slug;
    }
}