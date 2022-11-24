
@extends('layout.app')
@section('content')
<style>
    .heading{
        text-align:center;
        
    }
    .container{
        width: 300px;
        padding:30px;
        margin-top:40px;
    }
 
</style>
<div class="container border border-secondary shadow p-3 mb-5 bg-body rounded">
<div class="heading mb-2 mt-2"><h1 >SignUp</h1></div>

<form action="{{route('registerUser')}}" method="post" >
@csrf
<div class="mb-3">
            <label  class="form-label">Name:</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror"  name="name">
            <div id="UserNameError" class="form-text">@error('name') {{$message}} @enderror</div>

    </div>
            
<div class="mb-3">
            
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"  name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <div id="EmailError" class="form-text">@error('name') {{$message}} @enderror</div>


    </div>
<div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
            <div id="PasswordError" class="form-text">@error('name') {{$message}} @enderror</div>

    </div>
<div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
     
        <button type="submit" class="btn btn-primary mb-2 ">Submit</button>
</form>
</div>
@endsection

