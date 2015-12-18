@extends('master')

@section('title')
Forum
@stop

@section('content')
	<a href="{!! route('forums.create') !!}" class ="btn btn-primary"> 
		<span class="glyphicon glyphicon-plus"></span> Start a new Discussion
	</a><hr /><br />

	@if($forums->count() == 0)
		<p><em style='color:red;'> No Topics have been created</em></p>
	@else
		@foreach($forums as $topic)
			@include('forums.topics', ['topic' => $topic])
		@endforeach
	@endif


@stop