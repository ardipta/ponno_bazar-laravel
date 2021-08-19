<?php

use App\Http\Controllers\Auth\Admin\AdminAuthController;
use App\Http\Controllers\Auth\User\UserAuthController;
use App\Http\Controllers\Backend\BackPagesController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TicketInfoController;
use App\Http\Controllers\Backend\UserInfoController;
use App\Http\Controllers\Frontend\BusTicketController;
use App\Http\Controllers\Frontend\FrontPagesController;
use App\Http\Controllers\Frontend\TicketPurchaseController;
use App\Http\Controllers\Frontend\UserController;
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
/*
|--------------------------------------------------------------------------
| Front Page Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontPagesController::class, 'index'])->name('index');
Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');
Route::get('/search_result', [BusTicketController::class, 'search_result'])->name('search_result');
Route::get('/bus_ticket/trip_info', [BusTicketController::class, 'trip_info'])->name('trip_info');
Route::get('/bus_ticket/trip_info/confirm_ticket', [TicketPurchaseController::class, 'confirm_ticket'])->name('confirm_ticket');
Route::post('/bus_ticket/trip_info/confirm_ticket', [TicketPurchaseController::class, 'save_ticket_info'])->name('save_ticket_info');


/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/auth'], function(){
    Route::get('/admin/login',[AdminAuthController::class, 'admin_login'])->name('admin_login');
    Route::post('/admin/login',[AdminAuthController::class, 'admin_login_process'])->name('admin_login.post');
    Route::post('admin/logout',[AdminAuthController::class, 'admin_logout'])->name('admin_logout');
    Route::post('/login',[UserAuthController::class, 'process_login'])->name('login.post');
    Route::get('/register/complete_registration',[UserAuthController::class, 'complete_register'])->name('complete_register');
    Route::post('/register/complete_registration',[UserAuthController::class, 'process_signup'])->name('register.post');;
    Route::post('/logout',[UserAuthController::class, 'logout'])->name('logout');

});
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['admin']], function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/edit-profile', [ProfileController::class, 'editAdminProfile'])->name('edit_profile.admin');
        Route::post('/update-profile', [ProfileController::class, 'updateAdminProfile'])->name('update_profile.admin');
        Route::get('/change-password', [ProfileController::class, 'editAdminPassword'])->name('edit_password.admin');
        Route::post('/update-password', [ProfileController::class, 'updateAdminPassword'])->name('update_password.admin');
        Route::get('/', [BackPagesController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/add_bus_service', [BackPagesController::class, 'add_bus_service'])->name('add_bus_service');
        Route::resource('/bus_service_update', BackPagesController::class);
        Route::post('/add_bs_service', [BackPagesController::class, 'save_bus_info'])->name('save_bus_info');
        //coupon route
        Route::resource('/coupon', CouponController::class, ['names' => 'admin.coupons']);
        Route::get('/user-details', [UserInfoController::class, 'userInfo'])->name('user_info');
        Route::group(['prefix' => '/tickets'], function () {
            Route::get('/', [TicketInfoController::class, 'ticketInfo'])->name('ticket_info');
        });
    });
});
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => '/user'], function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard');
        Route::get('/purchase/confirmed', [UserController::class, 'confirmed'])->name('ticket.confirmed');
        Route::get('/purchase/pending', [UserController::class, 'pending'])->name('ticket.pending');
        Route::get('/user_profile', [UserController::class, 'user_profile'])->name('user_profile');
        Route::post('/user_profile', [UserController::class, 'update_profile'])->name('update_profile.post');
    });
});
