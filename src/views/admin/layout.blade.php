@extends('layout')

@section('head_append')
	<link rel="stylesheet" href="{{ asset(mix('css/admin.css')) }}">
@endsection

@section('body_prepend')
	@include('admin.layout.topbar')
	@include('admin.layout.sidebar', ['sidebar' => config('admin.sidebar')])
@endsection

@section('body_append')
	<script src="{{ asset(mix('js/admin.js')) }}"></script>
@endsection
