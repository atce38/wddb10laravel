@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($categories as $category)


    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="h1">
                    {{ $category->name }}
                </div>
                <div class="card border-left-success shadow h-100">

                    <div class="card-body">
                        <div class="row no-gutters text-dark align-items-center">
                @foreach ($category->products as $product)
                <img class="img-fuild" style="max-width: 200px" src="{{ $product->image }}" alt="{{ $product->product_name }}">

                            <div class="col-6">
                                <div class="text-xs font-weight-bold text-maginda text-center text-uppercase mb-1">
                                    {{ $product->product_name }}</div>
                                    <div class="text-xs font-weight-bold text-dark text-center text-uppercase mb-1">
                                     </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mt-2 text-center">
                                </div>
                            </div>


                @endforeach
            </div>

        </div>

    </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
