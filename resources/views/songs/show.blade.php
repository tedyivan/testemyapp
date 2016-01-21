@extends('master')

@section('content')
	<h1> Justin Bieber Official Fan Club</h1>

	<h2>{{ $song-> title }}</h2><!--titulo da musica-->

	@if ($song->lyrics)
		<article class="lyrics">
			<!--{{ $song->lyrics }}// sem espacamento-->
			{!! nl2br($song->lyrics) !!}
		

		</article>

	@endif
	

@endsection