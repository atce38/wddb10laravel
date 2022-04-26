@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @can('isAdmin')
                <h1>Admin</h1>
                <h1>User</h1>
                @endcan

                @can('isUser')
                <h1>User</h1>
                @endcan



            </div>
        </div>
    </div>
</div>
@endsection
