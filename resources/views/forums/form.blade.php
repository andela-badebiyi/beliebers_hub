<div class="form-group">
	{!! Form::label('author', 'Author') !!}
	{!! Form::text('author', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 
	'placeholder' => 'Please enter your name']) !!}
</div>

<div class="form-group">
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 
	'placeholder' => 'Please enter a title']) !!}
</div>


<div class="form-group">
	{!! Form::label('post', 'Post') !!}
	{!! Form::textarea('post', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 
	'placeholder' => 'Please enter your post']) !!}
</div>

<div class="for-group">
{!! Form::submit('Start Discussion', ['class' => 'btn btn-primary']) !!}
</div>