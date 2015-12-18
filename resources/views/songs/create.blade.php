@extends('master')

@section('content')
	<h3> Create New Track with Lyrics</h3><br/><br/>
	{!! Form::open(["url" => route('songs.store'), "method" => "POST"]) !!}
		@include('songs.form', ['btn_label' => 'Create Song'])
	{!! Form::close() !!}

	<p><a href = "/songs">&lt&lt Back</a></p>
@stop

@section('title')
Create Track
@stop