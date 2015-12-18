<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongComment extends Model
{
	protected $table = 'SongComments';
    protected $fillable = ['author', 'comment'];
}
