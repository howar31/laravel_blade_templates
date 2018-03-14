@extends('admin.layout', [
	'current_page' => 'login',
	'title' => 'Form Login',
])

@php
	$faker = Faker\Factory::create();
@endphp

@section('content')
	<h1>Login</h1>
	<p>login</p>

	<hr>

	<h1>Test</h1>
	<p>Data below are using for testing.</p>
	@for ($i = 0; $i < 20; $i++)
		<p>{{ $faker->realText($maxNbChars = $faker->numberBetween(200, 2000)) }}</p>
	@endfor
	<hr>
@endsection