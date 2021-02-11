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
