<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function datatable()
    {
        return view('tables.datatable');
    }

    public function infinite_scroll()
    {
        return view('tables.infinite-scroll');
    }

    public function selectable_columns()
    {
        return view('tables.selectable-columns');
    }
}