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
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Some Name</td>
                <td>5400</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
