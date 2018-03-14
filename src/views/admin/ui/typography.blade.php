@extends('admin.layout', [
	'current_page' => 'typography',
	'title' => 'UI Typography',
])

@php
	$faker = Faker\Factory::create();
@endphp

@section('content')
	<h1>Typography</h1>
	<p>typography</p>

	<hr>

	<h1>Test</h1>
	<p>Data below are using for testing.</p>
	@for ($i = 0; $i < 20; $i++)
		<p>{{ $faker->realText($maxNbChars = $faker->numberBetween(200, 2000)) }}</p>
	@endfor
	<hr>
@endsection