<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Department;
use App\Doctor;
use App\Patient;
use App\Schedule;
use Illuminate\Http\Request;
use Session;

class AppointmentController extends Controller
{
    public function add_appointment(){
        $patient= Patient::find(Session::get('patient_id'));
        $departments = Department::all();
        return view('website.pages.add-appointment',['departments'=>$departments,'patient'=>$patient]);
    }

    public function findDoctor($id){
        $doctors = Doctor::where('department_id','=',$id)->get();
        return response()->json([
		    'doctors' => $doctors
		]);
    }

    public function getAvailableDays($id){
        $schedules = Schedule::where('doctor_id','=',$id)->get();

        return response()->json([
		    'schedules' => $schedules
		]);

    }

    // public function getAvailableShift($id){
    //     $getShift = Schedule::where('id','=',$id)->first();
    //     return response()->json([
	// 	    'getShift' => $getShift
	// 	]);
    // }

    public function createAppointment(Request $request){
        $appointment = new Appointment();
        $appointment->patient_id = $request->patient_id;
        $appointment->department_id = $request->department_id;
        $appointment->doctor_id = $request->doctor_id;

        $schedule_id = $request->appointment_day;

        $appointmentDays = Schedule::find($schedule_id);
        $appointment->appointment_day = $appointmentDays->available_days;

        $appointment->shift = $request->shift;
        $appointment->status = $request->status;

        if ($appointment->save()) {
            Session::put('appointment_id',$appointment->id);
            $notification=array(
                'messege'=>'Successfully Appointment Taken .',
                'alert-type'=>'success'
                 );
               return Redirect('show/appointment/invoice')->with($notification);
        }else{
              $notification=array(
                'messege'=>'Something went wrong!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }

    public function showAppointmentInvoice(){

        $appointment_id = Session::get('appointment_id');
        $appointments = Appointment::leftJoin('patients','appointments.patient_id','patients.id')
                                        ->leftJoin('doctors','appointments.doctor_id','doctors.id')
                                        ->leftJoin('departments','appointments.department_id','departments.id')
                                        ->select('appointments.*','doctors.name as doc_name','patients.name as patient_name','departments.name as dept')
                                        ->where('appointments.id','=',$appointment_id)
                                        ->first();

        return view('website.pages.show_appointment',['appointments'=>$appointments]);
    }
}
