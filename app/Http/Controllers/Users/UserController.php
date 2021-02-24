<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard(){
        $users = DB::table('users')->where('is_admin', '0')->first();
        return view('Users.layouts.dashboard', ['users' => $users]);
    }

    public function user_profile(){
        $users = DB::table('users')->where('is_admin', '0')->first();
        return view('Users.layouts.user_profile', ['users' => $users]);
    }
}
