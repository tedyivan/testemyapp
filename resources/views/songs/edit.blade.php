@extends('master')

@section('content')
	<h1> Justin Bieber Official Fan Club</h1>

	<h2>{{ $song-> title }}</h2><!--titulo da musica-->

	{!! Form::model($song, ['url' => 'songs/'.$song->slug, 'method'=> 'PATCH']) !!}
		<div class="form-group">
		<!--esse title e' da base de dados-->
		{!! Form::text('title',null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		<!--esse title e' da base de dados-->
		{!! Form::textarea('lyrics',null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		
		{!! Form::submit('Update Song',['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection