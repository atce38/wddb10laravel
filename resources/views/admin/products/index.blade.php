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
                <th>Product Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection
