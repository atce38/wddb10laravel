@extends('master.master')
@section('title')
<title>Dashboard</title>
@endsection
@section('content')
    <div class="text-center">
        @if($role=='admin')
    <h1>Admin Heading </h1>
    <h1>User Heading</h1>
    @else
    <h1>User Heading</h1>
    @endif
    </div>
@endsection
