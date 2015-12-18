<div class = "forum-thumbnail">
	<h3>
		<a href="{{ route('forums.show', [$topic->slug]) }}">
			<span class="glyphicon glyphicon-tag"></span>
			{{ $topic->title }}
		</a>
	</h3>
	<p>
		<span class="glyphicon glyphicon-user"></span> {{ $topic->author }} <br /> 
		<span class="glyphicon glyphicon-time"></span> <small> {{ $topic->created_at }} </small><br/>
		<span class="glyphicon glyphicon-comment"></span> <small> {{ $topic->comments->count() }} comments </small>
	</p>
</div>