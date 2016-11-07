<?php

namespace ShawnSandy\Jstables\App\JsGrid;
use Illuminate\Support\Facades\Facade;

/**
 * Class JsGridFacade
 *
 * @package \ShawnSandy\Jstables\App\JsGrid
 */
class JsGridFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'JsGrid';
    }


}
