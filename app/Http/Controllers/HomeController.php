<?php

namespace App\Http\Controllers;

use Session;
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
        $departments = Department::all();
        return view('website.pages.department', ['departments'=>$departments]);
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
        if(Session::has('adminId')||Session::has('doctorId')){
            // Session::flush();
            return redirect()->back();
        }
        else {return view('website.pages.login');}
        return view('website.pages.login');
    }

}
