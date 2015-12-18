@extends('master')

@section('title')
	Testimonials
@stop

@section('content')
	@include('songs.confirm_script')
	<a href="{!! route('testimonials.create') !!}" class ="btn btn-primary"> 
		<span class="glyphicon glyphicon-pencil"></span> Post your testimony
	</a>
	<hr/><br/>
	@if($testimonies->count() == 0)
		<p><em style='color:red;'> No Testimony has been posted</em></p>
	@else
		@foreach($testimonies as $post)
			@include('testimonials.partial_post', ['post' => $post])
		@endforeach
	@endif
@stop
