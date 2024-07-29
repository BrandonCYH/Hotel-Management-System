<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class System_Controller extends Controller
{
    public function sign_in()
    {
        return view('sign_in');
    }
}