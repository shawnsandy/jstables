<?php

namespace ShawnSandy\Jstables\App;
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
    public function boot(){

        /**
         * publish views
         */
        $this->loadViewsFrom(__DIR__.'../resources/views/', 'datatables');

        $this->publishes([
            __DIR__.'../resources/views/datatables/' => resource_path('views/vendor/js-grid/datatables'),

        ], 'datatables-views');

        /**
         * publish assets
         */
        $this->publishes([
            __DIR__.'../../public/datatables' => public_path('vendors/datatables')
        ], 'datatables-assets');


    }

}
