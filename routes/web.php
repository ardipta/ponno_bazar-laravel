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
Route::get('/bus_ticket', 'App\Http\Controllers\PagesController@bus_ticket')->name('bus_ticket');
Route::get('/search_result', 'App\Http\Controllers\PagesController@search_result')->name('search_result');

Route::get('/login','App\Http\Controllers\Auth\AuthController@show_login_form')->name('login');
Route::post('/login','App\Http\Controllers\Auth\AuthController@process_login')->name('login.post');
Route::get('/register','App\Http\Controllers\Auth\AuthController@show_signup_form')->name('register');
Route::post('/register','App\Http\Controllers\Auth\AuthController@process_signup');
Route::post('/logout','App\Http\Controllers\Auth\AuthController@logout')->name('logout');


Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard')->name('dashboard');
