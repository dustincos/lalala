<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Register
    public function register(){
        if(auth()->check()){
            return redirect()->intended('dashboard');
        }
        return view("auth.register");
        }

    // Login Controller
    public function login(){
    if(auth()->check()){
        return redirect()->intended('dashboard');
    }
       return view("auth.login");
    }

    // logout
    public function logout() {
        auth()->logout();
        return redirect()->intended('login')->with("success", "you have been logged out successfullly");;
    }

    public function dashboard() {
        return view('admin.dash');
    }

    public function admin() {
        return view('admin.admin');
    }


}
