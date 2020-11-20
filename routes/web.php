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

Route::get('/','HomeController@index')->name('/');
Route::get('about/us','HomeController@aboutUs')->name('about-us');
Route::get('department','HomeController@department')->name('department');
Route::get('contact','HomeController@contact')->name('contact');
Route::get('blog','HomeController@blog')->name('blog');
Route::get('dashboard','AdminController@dashboard')->name('dashboard');
Route::get('notifications','AdminController@notifications')->name('notifications');
Route::get('tables','AdminController@tables')->name('tables');
Route::get('typography','AdminController@typography')->name('typography');
Route::get('user','AdminController@user')->name('user');