<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function contact_form()
    {
        return view('forms.contact-form');
    }
}