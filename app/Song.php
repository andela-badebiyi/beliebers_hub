<?php
namespace App;

use App\SongComment;
use Illuminate\Database\Eloquent\Model;

class Song extends Model{
	protected $fillable = ['title', 'slug', 'lyrics'];

	public function comments()
	{
		return $this->hasMany('App\SongComment', 'songs_id');
	}
}

?>