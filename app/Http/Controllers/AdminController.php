<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use App\Patient;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }


    public function doctors(){
        $doctors = Doctor::leftJoin('departments','doctors.department_id','departments.id')->select('doctors.*','departments.name as dept_name')->get();
        return view('admin.pages.doctors', ['doctors'=>$doctors]);
    }

    public function add_doctor(){
        return view('admin.pages.doctor.add-doctor');
    }
    public function edit_doctor(){
        return view('admin.pages.doctor.edit-doctor');
    }
    public function deleteDoctor($id){
        $obj = Doctor::find($id);
        if ($obj->delete()) {
            $notification=array(
                'messege'=>'Successfully Doctor Deleted',
                'alert-type'=>'success'
                 );
               return Redirect('doctors')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }

    }

    public function patients(){
        $patients = Patient::all();
        return view('admin.pages.patients', ['patients'=>$patients]);
    }
    public function deletePatient($id){
        $obj = Patient::find($id);
        if ($obj->delete()) {
            $notification=array(
                'messege'=>'Successfully Patient Deleted',
                'alert-type'=>'success'
                 );
               return Redirect('patients')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }

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
