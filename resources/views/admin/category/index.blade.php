@extends('master.master')


@section('content')
<div class="container">
    <div class="text-end mb-4">
        <a class="btn btn-success" href="{{ route('category.create') }}">Create</a>
    </div>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a class="btn btn-primary" href="{{ route('category.edit',['id'=>$category->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('category.delete',['id'=>$category->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection
