<?php

Route::get('/', function () {
	return view('admin.overview');
});

Route::prefix('admin')->group(function () {
	Route::get('/', function () {
		return view('admin.overview');
	});
	Route::get('overview', function () {
		return view('admin.overview');
	});
	Route::get('dashboard', function () {
		return view('admin.dashboard');
	});

	Route::prefix('ui')->group(function () {
		Route::get('alert', function () {
			return view('admin.ui.alert');
		});
		Route::get('button', function () {
			return view('admin.ui.button');
		});
		Route::get('form', function () {
			return view('admin.ui.form');
		});
		Route::get('grid', function () {
			return view('admin.ui.grid');
		});
		Route::get('modal', function () {
			return view('admin.ui.modal');
		});
		Route::get('table', function () {
			return view('admin.ui.table');
		});
		Route::get('toast', function () {
			return view('admin.ui.toast');
		});
		Route::get('panel', function () {
			return view('admin.ui.panel');
		});
		Route::get('progressbar', function () {
			return view('admin.ui.progressbar');
		});
		Route::get('typography', function () {
			return view('admin.ui.typography');
		});
	});

	Route::prefix('example')->group(function () {
		Route::get('login', function () {
			return view('admin.examples.login');
		});
	});

	Route::prefix('chart')->group(function () {
		Route::get('general', function () {
			return view('admin.charts.general');
		});
	});

	Route::prefix('about')->group(function () {
		Route::get('template', function () {
			return view('admin.about.template');
		});
		Route::get('author', function () {
			return view('admin.about.author');
		});
	});
});
