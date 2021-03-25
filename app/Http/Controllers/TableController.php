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
}