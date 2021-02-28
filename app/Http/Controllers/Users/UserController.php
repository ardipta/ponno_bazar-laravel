<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard(){
        $users = DB::table('users')->get();
        return view('Users.layouts.dashboard', ['users' => $users]);
    }

    public function user_profile(){
        $users = DB::table('users')->get();
        return view('Users.layouts.user_profile', ['users' => $users]);
    }

    public function update_profile(Request $request)
    {
        $this->validate($request,[
            'image' => 'nullable|mimes:jpg, jpeg, png|max:10000'
        ]);
        $user_id = auth()->user()->id;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $text = $file->getClientOriginalExtension();
            $fileName = time().'.'.$text;
            $file->move('uploads/images', $fileName);
            User::where('id', $user_id)->update([
                'image'=>$fileName,
                'first_name' => $request->fName ,
                'last_name' => $request->lName ,
                'date_of_birth' => $request->dob,
                'gender' => $request->gender,
                'phone' => $request->phn,
            ]);
        }
        else{
            User::where('id', $user_id)->update([
                'first_name' => $request->fName ,
                'last_name' => $request->lName ,
                'date_of_birth' => $request->dob,
                'gender' => $request->gender,
                'phone' => $request->phn,
            ]);
        }
        return redirect()->back()->with('message', 'Picture Uploaded Successfully');
    }
}
