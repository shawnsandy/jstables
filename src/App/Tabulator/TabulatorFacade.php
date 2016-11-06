<?php

namespace ShawnSandy\Jstables\App;

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
