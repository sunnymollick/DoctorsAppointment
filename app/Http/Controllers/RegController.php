<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use Image;
class RegController extends Controller
{
    public function registration(){
        $departments= Department::all();
       return view('website.pages.reg',['departments'=>$departments]);
   }

   public function store(Request $req){
       $validatedData = $req->validate([
           'first_name'=> 'required|max:50',
           'last_name'=> 'required|max:50',
           'email'=> 'required|email|unique:doctors,email',
           'password' => 'required|confirmed|min:5',
           'date_of_birth'=> 'required|date',
           'gender'=> 'required|in:male,female',
           'address'=>'required|max:70',
           'phone'=> 'required|numeric|size:11',
           'phone'=> 'required|regex:/(01)[0-9]{9}/',
           'status'=>'required|boolean',
          'picture'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       ]);
       $obj=new Doctor();
       $obj->department_id=$req->department;
       $obj->name=$req->first_name." ".$req->last_name;
       $obj->email=$req->email;
       $obj->password=bcrypt($req->password);
       $obj->dob=$req->date_of_birth;
       $obj->gender=$req->gender;
       $obj->address=$req->address;
       $obj->phone=$req->phone;
       $obj->status=$req->status;

       if ($req->file('picture'))

         {
               $originalImage      = $req->file('picture');
               $imageName          = $this->uploadImage($originalImage);
               $obj->image=$imageName;
            //    $applicant->picture = $imageName;
         }
         
       
       if ($obj->save()) {
           $notification=array(
               'messege'=>'Successfully Department Inserted',
               'alert-type'=>'success'
                );
              return Redirect('login')->with($notification);
       }else{
             $notification=array(
               'messege'=>'Something went wrong!',
               'alert-type'=>'error'
                );
              return Redirect()->back()->with($notification);
       }

   }
   
   
   private function uploadImage($originalImage)
   {
           $profileImage    = Image::make($originalImage);
   
           $tmp             = $originalImage->getClientOriginalName();
           $ext2            = explode(".", $tmp);
           $ext             = end($ext2);
           $imageName       = time().'.'.$ext;
           // local
           $path            = public_path().'/uploads/'; 
           $imageFullName = $path.$imageName;
           // deployment
           // $path          = base_path().'/../'.'uploads/';
           
           $profileImage->save($imageFullName);
           return $imageFullName;
    }

}
