<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function admin_login(){
        return view('auth.admin_login');
    }

    public function admin_login_process(Request $request)
    {
        Auth::logout();
        $admin = User::where('first_name', $request->input('first_name'))
            ->where('is_admin', 1)
            ->first();
        $request->validate([
            'first_name' => 'required',
            'password' => 'required'
        ], [
            'password.required' => 'Password field required',
            'first_name.required' => 'Username field required',
        ]);

        $credentials = $request->except(['_token']);
        if ($admin){
            if (auth()->attempt($credentials)) {
                return redirect()->route('dashboard')
                    ->with('success','Login successful as Admin');
            }else{
                return redirect()->back()
                    ->with('error','Invalid credentials');
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials!');
        }

    }

    public function process_login(Request $request)
    {
        Auth::logout();
        $user = User::where('phone', $request->input('phone'))
            ->where('is_admin', 0)
            ->first();
        if ($user){
            Auth::login($user);
            return response()->json('success user');
        }
        else{
            $userFound = User::where('phone', $request->input('phone'))->first();
            if ($userFound){
                return response()->json('admin');
            }
            else{
                return response()->json('new user');
            }
        }
    }

    public function complete_register()
    {
        return view('Auth.complete_registration');
    }
    public function process_signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'gender' => 'required',
            'phone' => 'required',
        ], [
            'first_name.required' => 'First Name field required',
        ]);

        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');
        if ($day === "" || $day === null || $month === "" || $year === ""){
            $dateOfBirth = "";
        }
        else{
            $dateOfBirth = $day."-".$month."-".$year;
        }
        $user = User::create([
            'first_name' => trim($request->input('first_name')),
            'last_name' => trim($request->input('last_name')),
            'gender' => strtolower($request->input('gender')),
            'date_of_birth' => strtolower($dateOfBirth),
            'phone' => trim($request->input('phone')),
            'is_admin' => 0,
        ]);

        if ($user){
            Auth::login($user);
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        else{
            return redirect()->back()->with('error','Error!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')
            ->with('success','Logged out successful');
    }
}
