<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $p_name=$request->product_name;
        $p_price=$request->product_price;

        return "Product Name:".$p_name.', Price:'.$p_price;
    }
}
