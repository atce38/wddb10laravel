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
        $first_heading="<h1>Core PHP Echo</h1>";
        $second_heading="<h1>Larave Echo without code execution</h1>";
        $third_heading="<h1>Larave Echo with code execution</h1>";

        $employees=array('Ali','Hassan','Faisal','Abid','Tahir');


        return view('user.dummy',compact('employees','first_heading','second_heading','third_heading'));
    }

}
