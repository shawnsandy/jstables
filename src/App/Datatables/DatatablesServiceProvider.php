<?php

namespace ShawnSandy\Jstables\App\Datatables;

use Illuminate\Support\ServiceProvider;


/**
 * Class DatatablesServiceProvider
 *
 * @package \ShawnSandy\Jstables\App
 */
class DatatablesServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '../resources/views/', 'datatables');

        $this->publishes([
            __DIR__ . '../resources/views/datatables/' => resource_path('views/vendor/js-grid/datatables'),

        ], 'datatables-views');

        /**
         * publish assets
         */
        $this->publishes([
            __DIR__ . '../../public/datatables' => public_path('vendors/datatables')
        ], 'datatables-assets');

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . 'helpers.php';
        endif;


    }


    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . 'App/config/config.php', 'datatables'
        );
        $this->app->bind(
            'Datatables', function () {
            return new Datatables();
        }
        );

    }

}
