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
Route::get('registration','HomeController@registration')->name('registration');
Route::get('login','HomeController@login')->name('login');

// Admin Routes go here >>

Route::get('dashboard','AdminController@dashboard')->name('dashboard');

Route::get('tables','AdminController@tables')->name('tables');

Route::get('user','AdminController@user')->name('user');
Route::get('login','AuthController@login')->name('login');
Route::get('registration','AuthController@registration')->name('registration');
Route::get('forget/password','AuthController@forgetPassword')->name('forget-password');

// Department Routes Go Here

Route::get('department','DepartmentController@index')->name('department');
Route::post('create/department','DepartmentController@create')->name('create-department');

