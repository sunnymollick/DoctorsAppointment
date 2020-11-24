<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctorProfile(){
    	return view('admin.pages.doctor.doctor_profile');
    }
}
