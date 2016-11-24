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
     * @return mixed
     */
    public function createColumns($columns = [])
    {

        $cols = collect($columns);

        $names = $cols->flatten();

        $data = $names->map(function ($name) {
            return ['data' => $name];
        });

        return $data;
    }

    public function styles($src = '')
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
