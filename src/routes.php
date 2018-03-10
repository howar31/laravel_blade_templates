<?php

Route::prefix('admin')->group(function () {
	Route::get('/', 'AdminController@dashboard');
	Route::get('dashboard', 'AdminController@dashboard');
});
