<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('admin.pages.auth.login');
    }
    public function registration(){
        return view('website.pages.reg');
    }
    public function forgetPassword(){
        return view('admin.pages.auth.forget_password');
    }
}
