<?php

namespace ShawnSandy\Jstables;

use Illuminate\Support\ServiceProvider;

/**
 * Class Provider
 *
 * @package ShawnSandy\PkgStart
 */
class JstablesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/App/routes.php';
        }

        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'jstables');
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/jstables'),
            ], 'jstables-views'
        );

        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/config/jstables.php' => config_path('jstables.php')],
            'jstables-config'
        );

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/App/Helpers/helper.php';
        endif;


    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        /***  remove this line to uncomment and setup ****
       $this->mergeConfigFrom(
            __DIR__ . 'App/config/config.php', '__YOUR_KEY_NAME__'
        );
        $this->app->bind(
            '__YOUR_FACADE_NAME__', function () {
                return new YOUR_CLASS_NAME();
            }
        );
      *** remove this line to uncomment ***/
    }
}
