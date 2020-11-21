<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller{
    public function index(){
        return view('admin.pages.department');
    }

    public function create(Request $request){
        $obj = new Department();
        $obj->name = $request->department;
        if ($obj->save()) {
    		$notification=array(
                'messege'=>'Successfully Department Inserted',
                'alert-type'=>'success'
                 );
               return Redirect()->to('department')->with($notification);
    	}else{
        	  $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }
}
