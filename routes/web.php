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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');

//Authentication
Route::get('/login','App\Http\Controllers\Auth\AuthController@show_login_form')->name('login');
Route::post('/login','App\Http\Controllers\Auth\AuthController@process_login')->name('login.post');
Route::get('/register','App\Http\Controllers\Auth\AuthController@show_signup_form')->name('register');
Route::get('/register/complete_registration','App\Http\Controllers\Auth\AuthController@complete_register')->name('complete_register');
Route::post('/register','App\Http\Controllers\Auth\AuthController@process_signup')->name('register.post');;
Route::post('/logout','App\Http\Controllers\Auth\AuthController@logout')->name('logout');

// Admin Panel
Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard')->name('dashboard')->middleware('admin');;
Route::get('/admin/add_bus_service','App\Http\Controllers\Admin\AdminController@add_bus_service')->name('add_bus_service')->middleware('admin');
Route::post('/admin/add_bus_service','App\Http\Controllers\Admin\AdminController@save_bus_info')->name('save_bus_info')->middleware('admin');

//Bus Search
Route::get('/bus_ticket', 'App\Http\Controllers\BusTicketController@bus_ticket')->name('bus_ticket');
Route::get('/search_result', 'App\Http\Controllers\BusTicketController@search_result')->name('search_result');

Route::get('/bus_ticket/trip_info', 'App\Http\Controllers\BusTicketController@trip_info')->name('trip_info');
Route::get('/bus_ticket/trip_info/confirm_ticket', 'App\Http\Controllers\BusTicketController@confirm_ticket')->name('confirm_ticket')->middleware('auth');;
Route::post('/bus_ticket/trip_info/confirm_ticket', 'App\Http\Controllers\BusTicketController@confirm_ticket')->name('confirm_ticket')->middleware('auth');;

// Users
Route::get('/users/dashboard','App\Http\Controllers\Users\UserController@dashboard')->name('users.dashboard')->middleware('auth');
Route::get('/users/user_profile','App\Http\Controllers\Users\UserController@user_profile')->name('user_profile')->middleware('auth');
Route::post('/users/user_profile','App\Http\Controllers\Users\UserController@update_profile')->name('update_profile.post');


Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ponnobazar.online',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('ashiqur35-2149@diu.edu.bd')->send(new \App\Mail\TicketConfirmMail($details));
});
