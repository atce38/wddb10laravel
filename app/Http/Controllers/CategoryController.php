<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::with('products')->get();
        // return $categories;
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');

    }
    public function store(Request $request)
    {
        $data=$request->all();
        // return $data['name'];
        Category::create($data);
        // Old before laravel 9
        // return redirect()->route('category.index');

        return to_route('category.index');

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }

    public function home()
    {
        $categories=Category::with('products')->get();
        // return $categories;
        return view('welcome',compact('categories'));
    }
}
