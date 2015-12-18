<div class="bubble-list">
      <div class="bubble clearfix">

    <img src="{!! '/placeholder.jpg' !!}">
    <div class="bubble-content">
         <div class="point"></div>
  <p><strong>{{ $post->name }}</strong> <small> {{ $post->created_at }}</small></p>
  <p>{!! nl2br($post->testimony) !!}</p>
  		 {!! Form::open(["url" => route('testimonials.destroy', $post->id), "method" => "DELETE", "onsubmit" =>"return ConfirmDelete()"]) !!}
		 	{!! Form::submit('Delete Testimony', ['class' => 'btn btn-danger']) !!}
		 {!! Form::close() !!}
	</div>
</div>
