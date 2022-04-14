<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($name,$price,$dis=0)
    {
        echo "Name: ".$name." Price=>".$price." Discount =>".$dis;

    }
}
