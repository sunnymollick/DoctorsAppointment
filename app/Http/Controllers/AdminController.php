<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function notifications(){
        return view('admin.pages.notifications');
    }
    public function tables(){
        return view('admin.pages.tables');
    }
    public function typography(){
        return view('admin.pages.typography');
    }
    public function user(){
        return view('admin.pages.user');
    }


}
