<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view('website.pages.index');
    }

    public function aboutUs(){
        return view('website.pages.about');
    }

    public function department(){
        return view('website.pages.department');
    }

    public function contact(){
        return view('website.pages.contact');
    }

    public function blog(){
        return view('website.pages.blog');
    }
    // public function registration(){
    //     $departments = Department::all();
    //     return view('website.pages.reg',['departments'=>$departments]);
    // }
    public function login(){
        return view('website.pages.login');
    }

}
