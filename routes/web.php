<?php

use App\Schedule;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Website Routes go here

Route::get('/','HomeController@index')->name('/');
Route::get('about/us','HomeController@aboutUs')->name('about-us');
Route::get('web/department','HomeController@department')->name('web-department');
Route::get('contact','HomeController@contact')->name('contact');
Route::get('blog','HomeController@blog')->name('blog');
Route::get('registration','RegController@registration')->name('registration');
Route::post('store-doctor','RegController@store')->name('store-doctor');
Route::get('login','HomeController@login')->name('login');
Route::post('login','LoginController@loginstore')->name('login-store');
Route::get('out','LoginController@logout')->name('logout');

// Admin Routes go here >>

Route::group(['middleware' => 'checkloggedin'], function(){
	// YOUR ROUTES HERE
    Route::get('dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('patients','AdminController@patients')->name('patients');
    Route::get('delete-patient/{id}','AdminController@deletePatient')->name('delete-patient');
    Route::get('appointments','AdminController@appointments')->name('appointments');

    // Schedule routes go here
    Route::get('schedule','ScheduleController@schedule')->name('schedule');
    // Department Routes Go

    Route::get('all/department','DepartmentController@manageDepartments')->name('all-departments');
    Route::get('add/department','DepartmentController@addDepartment')->name('add-department');
    Route::post('create/department','DepartmentController@createDepartment')->name('create-department');
    Route::get('edit/department/{id}', 'DepartmentController@editDepartment')->name('edit-department');
    Route::post('update-department/{id}', 'DepartmentController@updateDepartment')->name('update-department');
    Route::get('delete-department/{id}', 'DepartmentController@deleteDepartment')->name('delete-department');

    // Doctors Routes goes here
    Route::get('doctors','AdminController@doctors')->name('doctors');
    Route::get('add-doctor','AdminController@add_doctor')->name('add-doctor');
    Route::get('delete-doctor/{id}', 'AdminController@deleteDoctor')->name('delete-doctor');
    
});




Route::group(['middleware' => 'checkloggedindoc'], function(){
	// YOUR ROUTES HERE
    Route::get('doctor/profile', 'DoctorController@doctorProfile')->name('doctor-profile');

    // Schedule routes go here
    Route::post('create/schedule','ScheduleController@createSchedule')->name('create-schedule');
    Route::get('delete/my/schedule/{id}','ScheduleController@delteSchedule')->name('delete-my-schedule');

});





Route::get('add-patient','AdminController@add_patient')->name('add-patient');






// Appointment Route goes here
Route::get('add-appointment','AppointmentController@add_appointment')->name('add-appointment');
Route::post('create-appointment','AppointmentController@createAppointment')->name('create-appointment');
Route::get('show/appointment/invoice','AppointmentController@showAppointmentInvoice')->name('show-appointment-invoice');

// patient route goes here
Route::post('insert-patient','PatientController@insertPatient')->name('insert-patient');




Route::get('blog','BlogController@webBlog')->name('blog');
Route::get('admin/blog','BlogController@adminBlog')->name('admin-blog');
Route::get('add-blog','AdminController@add_blog')->name('add-blog');
Route::get('blog-details','AdminController@blog_details')->name('blog-details');
Route::get('edit-blog','AdminController@edit_blog')->name('edit-blog');


