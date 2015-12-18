<div class="bubble-list">
      <div class="bubble clearfix">

    <img src="{!! '/placeholder.jpg' !!}">
    <div class="bubble-content">
         <div class="point"></div>
  <p><strong>{{ $comment->author }}</strong> <small> {{ $comment->created_at }}</small></p>
  <p>{!! nl2br($comment->comment) !!}</p>
	</div>
</div>
