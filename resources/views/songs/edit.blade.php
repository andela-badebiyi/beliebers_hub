@extends('master')

@section('content')
	<h3>Edit Song:: 
	@if(isset($song->title))
		{{$song->title}} - Justin Bieber
	@else
		Unknown Song
	@endif
	</h3><br/><br/>
	{!! Form::model($song, ["url" => route('songs.update', [$song->slug]), "method" => "PATCH"]) !!}
		@include('songs.form', ['btn_label' => 'Update Song'])
	{!! Form::close() !!}

	<p>{!! link_to_route('songs.show', '<< Back', $song->slug) !!}
@stop

@section('title')
Lyrics - {{$song->title}}
@stop