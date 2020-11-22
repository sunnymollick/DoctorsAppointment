<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller{

    public function manageDepartments(){
        $departments =Department::all();
        return view('admin.pages.department.manage_departments',['departments'=>$departments]);
    }
    public function addDepartment(){
        return view('admin.pages.department.add_department');
    }

    public function createDepartment(Request $request){
        $obj = new Department();
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->status = $request->status;
        if ($obj->save()) {
    		$notification=array(
                'messege'=>'Successfully Department Inserted',
                'alert-type'=>'success'
                 );
               return Redirect()->to('add/department')->with($notification);
    	}else{
        	  $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }
    public function editDepartment($id){
        $department = Department::find($id);
        return view('admin.pages.department.edit_department', ['department'=>$department]);
    }
    public function updateDepartment(Request $req, $id){
        $department = Department::find($id);
        $department->name = $req->name;
        $department->description  = $req->description;
        $department->status = $req->status;
        if ($department->save()) {
            $notification=array(
                'messege'=>'Successfully Department Updated',
                'alert-type'=>'success'
                 );
               return Redirect('all/department')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }
    public function deleteDepartment($id){
        $obj =  Department::find($id);
        if ($obj->delete()) {
            $notification=array(
                'messege'=>'Successfully Department Deleted',
                'alert-type'=>'success'
                 );
               return Redirect('all/department')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }

}
