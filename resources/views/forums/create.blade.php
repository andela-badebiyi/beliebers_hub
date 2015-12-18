@extends('master')

@section('content')
	<h3> Start a New Discussion</h3><br/><br/>
	{!! Form::open(["url" => route('forums.store'), "method" => "POST"]) !!}
		@include('forums.form')
	{!! Form::close() !!}

	<p><a href = "/forums">&lt&lt Back</a></p>
@stop

@section('title')
Start Discussion
@stop