<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Schedule;
use Illuminate\Http\Request;
use DB;

class ScheduleController extends Controller
{
    public function schedule(){
        $schedules = Schedule::leftJoin('doctors','schedules.doctor_id','doctors.id')
                            ->leftJoin('departments','schedules.department_id','departments.id')
                            ->select('schedules.*','doctors.name as doc_name','departments.name as dept')
                                ->get();
        return view('admin.pages.schedule',['schedules'=>$schedules]);
    }


    public function createSchedule(Request $request){
        $available_days = $request->available_days;
        foreach($available_days as $available_day){
            $obj = new Schedule();
            $obj->doctor_id = $request->doctor_id;
            $obj->department_id = $request->department_id;
            $obj->available_days = $available_day;
            $obj->morning_shift = $request->morning_shift;
            $obj->evening_shift = $request->evening_shift;
            $obj->status = $request->status;
            $obj->save();
        }
        $notification=array(
            'messege'=>'Successfully Schedule Inserted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function getAvailableShift($id){
        $getShift = Schedule::where('id','=',$id)->first();
        $m_shift = $getShift->morning_shift;
        $e_shift = $getShift->evening_shift;
        $appoint_day = $getShift->available_days;
        $doc_id = $getShift->doctor_id;

        $get_m_appointment = Appointment::where('doctor_id','=',$doc_id)
                                            ->where('appointment_day','=',$appoint_day)
                                            ->where('shift','=',1)
                                            ->get();

        $get_m_count = $get_m_appointment->count();

        $m_result = $m_shift - $get_m_count ;

        $get_e_appointment = Appointment::where('doctor_id','=',$doc_id)
                                            ->where('appointment_day','=',$appoint_day)
                                            ->where('shift','=',0)
                                            ->get();

        $get_e_count = $get_e_appointment->count();

        $e_result = $e_shift - $get_e_count ;


        return response()->json([
                 'get_morning_appointment' => $m_result,
                 'get_evening_appointment' => $e_result,

	 	    ]);

        }

        public function delteSchedule($id){
            $schedule = Schedule::where('id','=',$id)->first();
            $schedule->delete();
            $notification=array(
                'messege'=>'Successfully Schedule Delete',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);

        }
}
