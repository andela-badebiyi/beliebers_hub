@extends('master')

@section('content')
	<h3>Bielebers favourite tracks</h3>
	<div class="list-group">
		@foreach($songs as $song)
			<li> {!! link_to_route('songs.show', $song->title, [$song->slug], ['class' => 'list-group-item']) !!} </li>
		@endforeach
	</div>
	<br/>
	<br/>
	<a href="{!! route('songs.create') !!}"> 
		<span class="glyphicon glyphicon-plus"></span> Add your favouirte Bieber track with Lyrics
	</a>
@stop

@section('title')
Song List
@stop