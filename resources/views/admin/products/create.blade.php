@extends('master.master')


@section('content')
<div class="container">

    <form action="{{ route('product.store') }}" method="post">
@csrf
        <input class="form-control" type="text" name="product_name" placeholder="Product Name">
        <input class="form-control" type="number" name="product_price" placeholder="Product Price">
        <input class="btn btn-danger" type="submit" value="Save">

    </form>
</div>

@endsection
