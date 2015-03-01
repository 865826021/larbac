<?php namespace Larbac\Provider;

use Illuminate\Support\ServiceProvider;


class LarbacServiceProvider extends ServiceProvider {
    
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;
        

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
            $this->publishes([
                 __DIR__.'/../Migration' => base_path('database/migrations/'),
             ]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

            
	}
        /***/
        
        

        
        

}