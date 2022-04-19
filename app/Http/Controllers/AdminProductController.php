<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        $products=Product::get();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product=new Product;
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->save();

        // $data=$request->all();
        // // return $data;
        // Product::create($data);
        return redirect()->route('product.index');
        // return "Product Name:".$p_name.', Price:'.$p_price;
    }
}
