<?php

namespace ShawnSandy\Jstables\App\Tabulator;

use Illuminate\Support\Facades\Facade;

/**
 * Class TabulatorFacade
 *
 * @package \ShawnSandy\Jstables\App
 */
class TabulatorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Tabulator';
    }

}
