@extends('master.master')


@section('content')
<div class="container">

    <form action="{{ isset($product)?route('product.update',['id'=>$product]): route('product.store') }}" method="post" enctype="multipart/form-data">
@csrf
        <input class="form-control" type="text" name="product_name" value="{{ isset($product)? $product->product_name:'' }}" placeholder="Product Name">

        <input class="form-control" type="number" name="product_price" value="{{isset($product)? $product->product_price:'' }}" placeholder="Product Price">
        <select class="form-control" required name="category_id" id="category_id">
            <option value="{{ null }}">Select Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input class="form-control" type="file" name="img">
        <input class="btn btn-danger" type="submit" value="Save">

    </form>
</div>

@endsection
