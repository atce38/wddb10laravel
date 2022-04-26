@extends('master.master')


@section('content')
<div class="container">
    <div class="text-end mb-4">
        <a class="btn btn-success" href="{{ route('product.create') }}">Create</a>
    </div>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img src="{{ $product->image }}" width="100" alt=""></td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td><a class="btn btn-primary" href="{{ route('product.edit',['id'=>$product->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('product.delete',['id'=>$product->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection
