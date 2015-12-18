<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SongComments', function(BluePrint $table){
            $table->increments('id');
            $table->string('author');
            $table->text('comment');
            $table->integer('songs_id')->unsigned();
            $table->foreign('songs_id')->references('id')->on('songs');
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
        Schema::drop('SongComments');
    }
}
