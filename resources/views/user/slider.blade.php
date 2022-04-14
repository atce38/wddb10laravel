@extends('master.master')


@section('content')
<div class="row">
    <div id="mcar" class="carousel slide col" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach ($slides as $key=> $slide)
             <div class="carousel-item {{ $key==0?'active':'' }}">
                <img class="d-block w-100" src="{{ $slide }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                                                        </div>
            </div>
            @endforeach
                    </div>
        <a class="carousel-control-prev" href="#mcar" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mcar" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection
