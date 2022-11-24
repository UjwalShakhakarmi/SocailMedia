@extends('layout.app')
@section('content')
<h1>Dashboard</h1>
<div class="container">
    <form action="{{route('logout')}}" method="get">
    <button class=" btn btn-primary" >Log Out</button>
    </form>
</div>

@endsection
