<?php

Route::prefix('admin')->group(function () {
	Route::get('/', function () {
		return view('admin.dashboard');
	});
	Route::get('dashboard', function () {
		return view('admin.dashboard');
	});
});
