<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('Auth.login');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('phone',$request->phone)->first();

        if (auth()->attempt($credentials)) {
            if(auth()->user()->is_admin == 1){
                return redirect()->route('dashboard');
            }
            else if (auth()->user()->is_admin == 0){
                return redirect()->route('users.dashboard');
            }
        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->route('login');
        }
    }
    public function show_signup_form()
    {
        return view('Auth.register');
    }
    public function complete_register()
    {
        return view('Auth.complete_registration');
    }
    public function process_signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');
        $dateOfBirth = $day."-".$month."-".$year;
        $user = User::create([
            'first_name' => trim($request->input('first_name')),
            'last_name' => trim($request->input('last_name')),
            'gender' => strtolower($request->input('gender')),
            'date_of_birth' => strtolower($dateOfBirth),
            'phone' => trim($request->input('phone')),
            'is_admin' => 0,
            'password' => bcrypt($request->input('password')),
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
