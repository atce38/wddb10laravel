<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        $products=Product::get();
        // return $products;
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product=new Product;
        $data=$request->all();
        if($image=$request->file('img')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move($destination,$image_name);
            $product->image='/'.$destination.$image_name;
            // $data['image']='/'.$destination.$image_name;
        }

        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->save();

        // $data=$request->all();
        // // return $data;
        // Product::create($data);
        return redirect()->route('product.index');
        // return "Product Name:".$p_name.', Price:'.$p_price;
    }
    public function edit(Request $request,$id)
    {
        // Elequent Queries
        $product=Product::find($id);
        // Raw select * from products where id=$id;

        return view('admin.products.create',compact('product'));
    }
    public function update(Request $request,$id)
    {
        $product=Product::find($id);

        $data=$request->all();

        if($image=$request->file('img')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move($destination,$image_name);
            // $product->image='/'.$destination.$image_name;
            $data['image']='/'.$destination.$image_name;
        }
        // return $data;
        $product->update($data);
        return redirect()->route('product.index');
        // return "Product Name:".$p_name.', Price:'.$p_price;
    }
    public function delete($id)
    {
        $product=Product::where('id',$id)->first();
        $product->delete();
        return redirect()->route('product.index');
    }
}
