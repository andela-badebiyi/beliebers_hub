<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\ForumComment;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateForumRequest;
use App\Http\Requests\CreateForumCommentRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Forum $forum)
    {
        $forums = $forum->get();
        return view('forums.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateForumRequest $request, Forum $forum)
    {
        $forum->author = $request->get('author');
        $forum->title = $request->get('title');
        $forum->post = $request->get('post');
        $forum->slug = $this->createSlug($forum->title);

        $forum->save();

        return redirect()->route('forums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Forum $forum)
    {
        $topic = $forum->whereSlug($slug)->first();

        return view('forums.show', compact('topic'));
    }

    public function addComment(CreateForumCommentRequest $request, Forum $forum, ForumComment $comment, $slug)
    {
         $comment->forum_id = $forum->whereSlug($slug)->first()->id;
         $comment->name = $request->get('name');
         $comment->comment = $request->get('comment');

         $comment->save();

        return redirect()->action('ForumController@show', [$slug]);
    }

    private function createSlug($forum_title)
    {
        $title = strtolower(trim($forum_title));
        $explode_tit = explode(" ", $title);
        $slug = implode("-", $explode_tit);
        return $slug;
    }
}
