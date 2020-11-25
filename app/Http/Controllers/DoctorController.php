<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use App\Schedule;
use Session;
use Illuminate\Http\Request;


class DoctorController extends Controller
{
    public function doctorProfile(){
        $doc_id = Session::get('doctorId');
        $schedules = Schedule::where('doctor_id','=',$doc_id)->get();
        $doctor = Doctor::find(Session::get('doctorId'));
        $department = Department::where('id',$doctor->department_id)->first();
    	return view('admin.pages.doctor.doctor_profile',['doctor'=>$doctor,'department'=>$department,'schedules'=>$schedules]);
        
    }
}
