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

Route::get('/', 'App\Http\Controllers\Pages\PagesController@index')->name('index');
Route::get('/contact', 'App\Http\Controllers\Pages\PagesController@contact')->name('contact');

//Authentication
Route::get('/admin/login','App\Http\Controllers\Auth\AuthController@admin_login')->name('admin_login');
Route::post('/admin/login','App\Http\Controllers\Auth\AuthController@admin_login_process')->name('admin_login.post');
Route::post('/login','App\Http\Controllers\Auth\AuthController@process_login')->name('login.post');
Route::get('/register/complete_registration','App\Http\Controllers\Auth\AuthController@complete_register')->name('complete_register');
Route::post('/register/complete_registration','App\Http\Controllers\Auth\AuthController@process_signup')->name('register.post');;
Route::post('/logout','App\Http\Controllers\Auth\AuthController@logout')->name('logout');

// Admin Panel
Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard')->name('dashboard')->middleware('admin');
Route::get('/admin/add_bus_service','App\Http\Controllers\Admin\AdminController@add_bus_service')->name('add_bus_service')->middleware('admin');
Route::post('/admin/add_bus_service','App\Http\Controllers\Admin\AdminController@save_bus_info')->name('save_bus_info')->middleware('admin');

//Bus Search
Route::get('/search_result', 'App\Http\Controllers\BusTicketController@search_result')->name('search_result');

Route::get('/bus_ticket/trip_info', 'App\Http\Controllers\BusTicketController@trip_info')->name('trip_info');
Route::get('/bus_ticket/trip_info/confirm_ticket', 'App\Http\Controllers\BusTicketController@confirm_ticket')->name('confirm_ticket');
Route::post('/bus_ticket/trip_info/confirm_ticket', 'App\Http\Controllers\BusTicketController@save_ticket_info')->name('save_ticket_info')->middleware('auth');;

// Users
Route::get('/users/dashboard','App\Http\Controllers\Users\UserController@dashboard')->name('users.dashboard')->middleware('auth');
Route::get('/users/user_profile','App\Http\Controllers\Users\UserController@user_profile')->name('user_profile')->middleware('auth');
Route::post('/users/user_profile','App\Http\Controllers\Users\UserController@update_profile')->name('update_profile.post');
