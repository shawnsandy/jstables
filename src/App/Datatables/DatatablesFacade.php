<?php

namespace ShawnSandy\Jstables\App\Datatables;
use Illuminate\Support\Facades\Facade;

/**
 * Class DatatablesFacade
 *
 * @package \ShawnSandy\Jstables\App
 */
class DatatablesFacade extends Facade 
{
    /**
     * Facade
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
       return 'Datatables';
    }


}
