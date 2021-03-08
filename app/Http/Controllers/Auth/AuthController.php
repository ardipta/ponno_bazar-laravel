<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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
                return redirect()->route('dashboard')
                    ->with('success','Login successful as Admin');
            }
            else{
                return redirect()->route('users.dashboard')
                    ->with('success','Login successful!');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Invalid credentials');
        }
    }
    public function show_signup_form()
    {
        $users = DB::table('users')->get();
        return view('Auth.register', [
            'users' => $users,
        ]);
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
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed|min:6'
        ], [
            'first_name.required' => 'First Name field required',
            'gender.required' => 'Gender field required',
            'year.required' => 'Year field required',
            'month.required' => 'Month field required',
            'day.required' => 'Day field required',
            'password.required' => 'Password field required',
            'password.confirmed' => 'Password not matched ',
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

        return redirect()->route('login')
            ->with('success','Account creation complete. Now please login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')
            ->with('success','Logged out successful');
    }
}
