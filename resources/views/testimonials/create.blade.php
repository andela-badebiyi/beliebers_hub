@extends('master')

@section('content')

	<h3> Post Your Belieber Testimony</h3><br/><br/>
	{!! Form::open(["url" => route('testimonials.store'), "method" => "POST"]) !!}
		@include('testimonials.form', ['btn_label' => 'Create Song'])
	{!! Form::close() !!}

@stop

@section('title')
Post Testimony
@stop