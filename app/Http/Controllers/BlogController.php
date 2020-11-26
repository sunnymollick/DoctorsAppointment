<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller{
    public function webBlog(){
        return view('website.pages.blog');
    }

    public function adminBlog(){
        return view('admin.pages.blog.blog');
    }
}
