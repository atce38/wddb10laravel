@extends('master.master')


@section('content')
<div class="container">

    <form action="{{ isset($category)?route('category.update',['id'=>$category->id]): route('category.store') }}" method="post" enctype="multipart/form-data">
@csrf
        <input class="form-control" type="text" name="name" value="{{ isset($category)? $category->name:'' }}" placeholder="Category Name">
        <input class="btn btn-danger" type="submit" value="Save">

    </form>
</div>

@endsection
