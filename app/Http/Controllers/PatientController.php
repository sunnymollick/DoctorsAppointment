<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function insertPatient(Request $req){
        $validatedData = $req->validate([
           'name'=> 'required|max:50',
           'email'=> 'required|email|unique:patients,email',
           'dob'=> 'required|min:1',
           'address'=>'required|max:70',
        //    'phone'=> 'required|numeric|size:11',
           'phone'=> 'required|regex:/(01)[0-9]{9}/'
        ]);
        $obj = new Patient();
        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->dob=$req->dob;
        $obj->address=$req->address;
        $obj->phone=$req->phone;

        if ($obj->save()) {
            $notification=array(
                'messege'=>'Successfully Patient Inserted',
                'alert-type'=>'success'
                 );
               return Redirect('add-appointment')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }


    }
}
