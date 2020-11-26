<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Doctor;
use Session;
use Hash;

class LoginController extends Controller
{
    public function loginstore(Request $req){
        $validatedData = $req->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);
        

    	$email = $req->email;
        $password = $req->password;
        $user = Doctor::where('email','=',$email)->first();
        $admin = Admin::where('email','=',$email)->first();

        
        if($user && Hash::check($password, $user->password)){
            Session::put('doctorId',$user->id);
            Session::put('doctorName',$user->name);
            Session::put('doctorDob',$user->dob);
            Session::put('doctorGender',$user->gender);
            Session::put('doctorEmail',$user->email);
            Session::put('doctorAvatar',$user->image);
            return redirect()->to('doctor/profile');
        }
        elseif($admin && ($password = $admin->password)){
            Session::put('adminId',$admin->id);
            Session::put('adminName','Admin');
            Session::put('adminEmail',$admin->email);          
            return redirect()->to('dashboard');   
        }
        else{
            $notification=array(
              'messege'=>'Password or Email is Incorrect!',
              'alert-type'=>'error'
               );
             return Redirect()->back()->with($notification);
      }

    }
    public function logout(){
        Session::flush();
        return redirect()->to('/');
    }

}
