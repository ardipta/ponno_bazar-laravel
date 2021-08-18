<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function editAdminProfile(){
        return view('backend.layouts.edit_profile');
    }

    public function updateAdminProfile(Request $request): \Illuminate\Http\RedirectResponse
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $admin = Auth::guard('admin')->user();
        $request->validate([
           'name' => 'required',
           'email' => 'required|email'
        ]);
        $admin_update = Admin::where('id', $admin->id)->update([
            'name' => $name,
            'email' => $email,
        ]);
        if ($admin_update){
            return redirect()->back()
                ->with('success','Successfully updated profile!');
        }
        else{
            return redirect()->back()->with('error','Error!');
        }
    }
    public function editAdminPassword(){
        return view('backend.layouts.change_password');
    }

    public function updateAdminPassword(Request $request): \Illuminate\Http\RedirectResponse
    {
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $admin_update = Admin::where('id', $admin->id)->update([
            'password' => Hash::make($request->password)
        ]);
        if ($admin_update){
            return redirect()->back()
                ->with('success','Successfully changed password!');
        }
        else{
            return redirect()->back()->with('error','Error!');
        }
    }
}
