		<div class="form-group">
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 'placeholder' => 'Please enter a title']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('lyrics', 'Lyrics') !!}
			{!! Form::textarea('lyrics', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 'placeholder' => 'Please enter the lyrics']) !!}
		</div>

		<div class="for-group">
		{!! Form::submit($btn_label, ['class' => 'btn btn-primary']) !!}
		</div>