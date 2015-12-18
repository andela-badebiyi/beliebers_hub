@extends('master')

@section('content')
	@include('songs.confirm_script')

	<h3>Song Title:: 
	@if(isset($song->title))
		{{$song->title}}
	@else
		Unknown Song
	@endif
	</h3><hr/>

	<h5>Lyrics</h5>
	{!! nl2br($lyric) !!}
	<p></p>
	<p>
	{!! link_to_route('songs.index', 'Go back home', [], ['class' => 'btn btn-info']) !!}  
	@if(isset($song->title))
		 {!! link_to_route('songs.edit', 'Edit Song', [$song->slug], ['class' => 'btn btn-primary']) !!} 
		 {!! Form::open(["url" => route('songs.destroy', $song->slug), "method" => "DELETE", "onsubmit" =>"return ConfirmDelete()"]) !!}
		 	{!! Form::submit('Delete Song', ['class' => 'btn btn-danger']) !!}
		 {!! Form::close() !!}
	@endif
	</p>

	<h4>Comments</h4>
	@if($comments->count() == 0)
		 <em style='color:#dd0033;'> No comments found </em>
	@else
		@foreach($comments as $comment)
			@include('songs.comment_post', ['comment' => $comment])
		@endforeach
	@endif

	<hr />
	<h4>Add Comments</h4>
	{!! Form::open(['method' => 'POST', 'url' => route('add_comment_path', [$song->slug])]) !!}
		@include('songs.comment_form')
	{!! Form::close() !!}
@stop

@section('title')
Lyrics - 
	@if(isset($song->title))
		{{$song->slug}}
	@endif

@stop
