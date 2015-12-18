		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 'placeholder' => 'Please enter your name']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('testimony', 'Testimony') !!}
			{!! Form::textarea('testimony', null, ['class' => 'form-control', 'style' => 'max-width: 30em;', 'placeholder' => 'Please enter your testimony']) !!}
		</div>

		<div class="for-group">
		{!! Form::submit('Testify!!!!', ['class' => 'btn btn-primary', 'style' => 'width: 30em;']) !!}
		</div>