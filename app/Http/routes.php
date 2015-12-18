<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('songs', 'SongsController');
Route::get('/', 'SongsController@index');
Route::post('/songs/{slug}/addComment', array('as' => 'add_comment_path', 'uses' => 'SongsController@addComment'));
Route::resource('testimonials', 'TestimonialController',
	['only' => ['index', 'create', 'store', 'destroy'] ]);
Route::resource('forums', 'ForumController',
	['only' => ['index', 'create', 'show', 'store', 'destroy'] ]);
Route::post('/forums/{slug}/addComment', array('as' => 'add_forum_comment_path', 'uses' => 'ForumController@addComment'));