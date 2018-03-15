@extends('layout')

@section('head_append')
	<link rel="stylesheet" href="{{ URL::asset(mix('css/admin.css')) }}">
@endsection

@section('body_prepend')
	@include('admin.layout.topbar')
	@include('admin.layout.sidebar', ['sidebar' => config('admin.sidebar')])
@endsection

@section('body_append')
	<script src="{{ URL::asset(mix('js/admin.js')) }}"></script>
@endsection
