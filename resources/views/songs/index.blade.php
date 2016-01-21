@extends('master')

@section('content')
	<h1> Justin Bieber Official Fan Club</h1>

	@foreach($songs as $song)
		<li><a href="/songs/{{ $song->slug }}">{{ $song->title }}</a></li>
	@endforeach

@endsection