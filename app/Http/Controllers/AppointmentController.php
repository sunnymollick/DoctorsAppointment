<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function add_appointment(){
        return view('website.pages.add-appointment');
    }}
