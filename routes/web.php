<?php

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

// Admin Routes go here >>

Route::get('dashboard','AdminController@dashboard')->name('dashboard');

Route::get('doctors','AdminController@doctors')->name('doctors');
Route::get('add-doctor','AdminController@add_doctor')->name('add-doctor');

Route::get('patients','AdminController@patients')->name('patients');
Route::get('add-patient','AdminController@add_patient')->name('add-patient');

Route::get('appointments','AdminController@appointments')->name('appointments');

Route::get('schedule','AdminController@schedule')->name('schedule');
Route::get('add-schedule','AdminController@add_schedule')->name('add-schedule');

// Department Routes Go

Route::get('all/department','DepartmentController@manageDepartments')->name('all-departments');
Route::get('add/department','DepartmentController@addDepartment')->name('add-department');
Route::post('create/department','DepartmentController@createDepartment')->name('create-department');
Route::get('edit/department/{id}', 'DepartmentController@editDepartment')->name('edit-department');
Route::post('update-department/{id}', 'DepartmentController@updateDepartment')->name('update-department');
Route::get('delete-department/{id}', 'DepartmentController@deleteDepartment')->name('delete-department');

// Appointment Route goes here
Route::get('add-appointment','AppointmentController@add_appointment')->name('add-appointment');

// patient route goes here
Route::post('insert-patient','PatientController@insertPatient')->name('insert-patient');

Route::get('blog','AdminController@blog')->name('blog');
Route::get('add-blog','AdminController@add_blog')->name('add-blog');
Route::get('blog-details','AdminController@blog_details')->name('blog-details');
Route::get('edit-blog','AdminController@edit_blog')->name('edit-blog');






