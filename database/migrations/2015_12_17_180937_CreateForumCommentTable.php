<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('comment');
            $table->integer('forum_id')->unsigned();
            $table->foreign('forum_id')->references('id')->on('forum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('forum_comments');
    }
}
