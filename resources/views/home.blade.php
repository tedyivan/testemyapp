@extends('master')

@section('content')
	
	<h1><?=$name; ?></h1>
	<?php foreach($lessons as $lesson):?>

			<h2><?= $lesson; ?></h2>
	<?php endforeach; ?> 

@endsection