<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;

class PatientController extends Controller
{
    public function insertPatient(Request $req){
        $validatedData = $req->validate([
           'name'=> 'required|max:50',
           'email'=> 'required|email|unique:patients,email',
           'dob'=> 'required|date',
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
        $obj->save();

        $patient_id = $obj->id;
        Session::put('patient_id',$patient_id);

        return Redirect('add-appointment');



    }
}
