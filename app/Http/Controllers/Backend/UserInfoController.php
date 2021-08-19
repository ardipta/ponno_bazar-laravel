<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function userInfo(){
        $userInfo = User::orderBy('created_at', 'DESC')->get();
        return view('backend.layouts.user.user_details', [
            'userInfo' => $userInfo,
        ]);
    }


}
