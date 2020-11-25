<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('find-doctor/{id}','AppointmentController@findDoctor');
Route::get('get-available_days/{id}','AppointmentController@getAvailableDays');
// Route::get('get-available-shift/{id}','AppointmentController@getAvailableShift');
Route::get('get-available-shift/{id}','ScheduleController@getAvailableShift');
