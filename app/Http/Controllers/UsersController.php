<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class UsersController extends Controller
{
    public function registerUser(Request $req)
    {
        $req->validate([
            'name' =>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);
        // dd($req->all());

        Users::create([
            'username'=> $req->name,
            'email'=> $req->email,
            'password'=> Hash::make($req->password),
        ]);
        return redirect('/login');
    }
    public function loginUser(Request $req)
    {
        
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($req->only('email','password'))){
            // return redirect('/Dashboard');
             return redirect()->route('Dashboard'); 
        }else{
           return back()->with('fail','User Not Found!');
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('LoginUser');
    }
}
