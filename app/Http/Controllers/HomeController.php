<?php

namespace App\Http\Controllers;

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
}
