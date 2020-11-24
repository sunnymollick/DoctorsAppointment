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
            Session::put('doctorid',$user->id);
            Session::put('doctorname',$user->name);
            Session::put('doctordob',$user->dob);
            Session::put('doctorgender',$user->gender);
            Session::put('doctoremail',$user->email);
            return redirect()->to('dashboard');
        }
        elseif($admin && ($password = $admin->password)){
            Session::put('adminid',$admin->id);
            Session::put('adminname','Admin');
            Session::put('adminemail',$admin->email);          
            return redirect()->to('dashboard');   
        }
        else {             
            return redirect()->to('/login');       
        }

    }
    public function logout(){
        Session::flush();
        return redirect()->to('/');
    }

}
