<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';
    protected $fillable = ['author', 'title', 'post'];

    public function comments()
    {
    	return $this->hasMany('App\ForumComment', 'forum_id');
    }
}
