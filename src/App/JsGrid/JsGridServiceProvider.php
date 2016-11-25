<?php

namespace ShawnSandy\Jstables\App\JsGrid;

use Illuminate\Support\ServiceProvider;

/**
 * Class JsGridServiceProvider
 *
 * @package \ShawnSandy\Jstables\App\JsGrid
 */
class JsGridServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'jsgrid');

        $this->publishes([
            __DIR__ . '/../resources/views/jsgrid/' => resource_path('views/vendor/js-grid/jsgrid'),

        ], 'jsgrid-views');

        /**
         * publish assets
         */
        $this->publishes([
            __DIR__ . '../../../bower_components/jsgrid/dist/' => public_path('assets/jsgrid')
        ], 'jsgrid-assets');

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/helpers.php';
        endif;


    }

    public function register()
    {

        $this->app->bind(
            'JsGrid', function () {
            return new JsGrid();
        }
        );

    }

}
