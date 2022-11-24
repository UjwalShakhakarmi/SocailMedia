@extends('layout.app')


@section('content')
@if(Session::has('fail'))
<div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
</div>
@endif
<style>
    .h1{
        text-align:center;
    }
    .container{
        width: 300px;
        padding:30px;
        margin-top:40px;
    }
</style>
    <div class="container border border-secondary">
    <h1>Login</h1>

    <form action="{{route('LoginUser')}}" method="post" >
        @csrf 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form></div>
@endsection
