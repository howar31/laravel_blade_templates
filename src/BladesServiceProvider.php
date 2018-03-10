<?php

namespace Howar31\Blades;

use Illuminate\Support\ServiceProvider;

class BladesServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/assets' => resource_path('assets'),
			__DIR__.'/views' => resource_path('views'),
			__DIR__.'/controllers' => app_path('Http/Controllers'),
			__DIR__.'/routes.php' => base_path('routes/web.php'),
		], 'admin');
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
