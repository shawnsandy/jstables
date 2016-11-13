<?php

namespace ShawnSandy\Jstables\App\Datatables;

/**
 * Class Datables
 *
 * @package \ShawnSandy\Jstables\App
 */
class Datatables
{


    /**
     * Create table columns names
     *
     * @param array $columns
     * @return static
     */
    public function createTableColumns($columns = [])
    {

        $cols = collect($columns);

        $cols->map(function ($name) {
            return ['data' => $name];
        });

        return $cols;

    }

    public function css($src = '')
    {
        if (empty($src))
            $src = 'cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css';

        return "<link rel=\"stylesheet\" href=\"//{$src}\">";
    }

    public function script($src = '')
    {
        if (empty($src))
            $src = "cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js";

        return "<script src=\"//{$src}\"></script>";
    }

}
