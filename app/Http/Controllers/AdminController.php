<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }


    public function doctors(){
        return view('admin.pages.doctors');
    }

    public function add_doctor(){
        return view('admin.pages.doctor.add-doctor');
    }
    public function edit_doctor(){
        return view('admin.pages.doctor.edit-doctor');
    }


    public function patients(){
        return view('admin.pages.patients');
    }


    public function appointments(){
        return view('admin.pages.appointments');
    }





    public function add_blog(){
        return view('admin.pages.add-blog');
    }
    public function blog_details(){
        return view('admin.pages.blog-details');
    }
    public function edit_blog(){
        return view('admin.pages.edit-blog');
    }


    public function tables(){
        return view('admin.pages.tables');
    }
    public function typography(){
        return view('admin.pages.typography');
    }

}
