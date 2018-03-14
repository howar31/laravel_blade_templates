@extends('admin.layout', [
	'current_page' => 'author',
	'title' => 'About Author',
])

@php
	$faker = Faker\Factory::create();
@endphp

@section('content')
	<h1>Author</h1>
	<p>author</p>

	<hr>

	<h1>Test</h1>
	<p>Data below are using for testing.</p>
	@for ($i = 0; $i < 20; $i++)
		<p>{{ $faker->realText($maxNbChars = $faker->numberBetween(200, 2000)) }}</p>
	@endfor
	<hr>
@endsection