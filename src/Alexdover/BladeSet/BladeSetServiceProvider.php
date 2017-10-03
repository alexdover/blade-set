<?php namespace Alexdover\BladeSet;

use Illuminate\Support\ServiceProvider;

class BladeSetServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$blade = $this->app['view']->getEngineResolver()->resolve('blade')->getCompiler();

		$blade->extend(function($value) {
		    return preg_replace('/@set\((?<q>\'|")(.+)\k{q}\,\s?(.*)\)/', '<?php $$2 = $3; ?>', $value);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
