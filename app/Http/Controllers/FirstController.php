<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function first()
    {
        return view("home");

    }
    public function home()
    {
        return view('user.dummy');
    }

}
