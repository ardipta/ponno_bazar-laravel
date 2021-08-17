<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function admin_login(){
        return view('auth.admin.admin_login');
    }

    public function admin_login_process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'password.required' => 'Password field required',
            'email.required' => 'Email field required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            session()->flash('login_success', 'Successfully logged in!!');
            return redirect()->intended(route('admin.dashboard'));
        }else{
            return redirect()->back()
                ->with('error','Invalid credentials');
        }
    }


    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'Log out successful');
    }
}
