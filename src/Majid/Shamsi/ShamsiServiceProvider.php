<?php namespace Majid\Shamsi;

use Illuminate\Support\ServiceProvider;

class ShamsiServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	public function boot()
	{
		$this->package('majid/shamsi');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['shamsi'] = $this->app->share(function($app)
		{
		  return new Shamsi;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Shamsi', 'Majid\Shamsi\Facades\Shamsi');
		});	
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('shamsi');
	}

}
