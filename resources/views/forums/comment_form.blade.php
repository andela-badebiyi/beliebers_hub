		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 'placeholder' => 'Enter a name']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('comment', 'Comment') !!}
			{!! Form::textarea('comment', null, ['class' => 'form-control', 'style' => 'max-width: 30em; max-height: 6em;', 'placeholder' => 'Please enter a comment']) !!}
		</div>

		<div class="for-group">
		{!! Form::submit('Add Comment', ['class' => 'btn btn-primary']) !!}
		</div>