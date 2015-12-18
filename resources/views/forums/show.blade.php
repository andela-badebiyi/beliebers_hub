@extends('master')

@section('content')
	{!! link_to_route('forums.index', '<< Back') !!}
	<div class = "forum-thumbnail">
		<h3>
			<span class="glyphicon glyphicon-tag"></span>
			{{ $topic->title }}
		</h3>
		<p>
			<span class="glyphicon glyphicon-user"></span> {{ $topic->author }} <br /> 
			<span class="glyphicon glyphicon-time"></span> <small> {{ $topic->created_at }} </small><br/>
			<span class="glyphicon glyphicon-comment"></span> <small> {{ $topic->comments->count() }} comments </small>
		</p>
	</div>
	<hr />
	<section>
		<p style='text-align:justify;'>{!! nl2br($topic->post) !!}</p>
	</section>

	<h3>Comments</h3>
	@if($topic->comments->count() == 0)
		 <em style='color:#dd0033;'> No comments found </em>
	@else
		@foreach($topic->comments as $comment)
			@include('forums.comment_post', ['comment' => $comment])
		@endforeach
	@endif

	<hr />
	<h4>Add Comments</h4>
	{!! Form::open(['method' => 'POST', 'url' => route('add_forum_comment_path', [$topic->slug])]) !!}
		@include('forums.comment_form')
	{!! Form::close() !!}
@stop

@section('title')
{!! $topic->slug !!}
@stop