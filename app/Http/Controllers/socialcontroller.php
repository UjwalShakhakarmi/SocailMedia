<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class socialcontroller extends Controller
{
    public function dashboard(){
        return view('Dashboard');
    }
    public function login(){
        return view('login');
    }
    public function Register(){
        return view('register');
    }

}
