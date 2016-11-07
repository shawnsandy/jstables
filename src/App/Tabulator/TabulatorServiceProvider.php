<?php

namespace ShawnSandy\Jstables\App\Tabulator;

use Illuminate\Support\ServiceProvider;


/**
 * Class TabulatorServiceProvider
 *
 * @package \ShawnSandy\Jstables\App
 */
class TabulatorServiceProvider extends ServiceProvider
{

    /**
     * Post registration services
     *
     */
    public function boot()
    {

        /**
         * publish views
         */
        $this->loadViewsFrom(__DIR__ . '../resources/views/', 'tabulator');

        $this->publishes([
            __DIR__ . '../resources/views/tabulator/' => resource_path('views/vendor/js-grid/tabulator'),

        ], 'tabulator-views');

        /**
         * publish assets
         */
        $this->publishes([
            __DIR__ . '../../public/tabulator' => public_path('vendors/tabulator')
        ], 'tabulator_assets');

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/helpers.php';
        endif;


    }


    /**
     * Register
     */
    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . 'App/config/config.php', 'tabulator'
        );
        $this->app->bind(
            'Tabulator', function () {
            return new Tabulator();
        }
        );

    }
}
