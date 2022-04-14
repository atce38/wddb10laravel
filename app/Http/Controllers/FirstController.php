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

    public function dashboard()
    {
        $role="user";
        // if($role =='admin')
        return view('dashboard.index',compact('role'));
    //     else
    //     return abort(403,"You are not Authorized");
     }
     public function slider()
     {
         $slides=array("https://edu.abidingtech.com/assets/images/slides/androidcourseingujranwala.png",
        "https://edu.abidingtech.com/assets/images/slides/14229_banner%201.png",
    "https://edu.abidingtech.com/assets/images/slides/AbidingTechComputerEducationslide2.png");
        return view('user.slider',compact('slides'));
     }

}
