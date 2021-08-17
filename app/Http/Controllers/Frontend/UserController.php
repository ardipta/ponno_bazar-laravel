<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard(){
        $ticket_info = DB::table('ticket_informations')->where('passenger_phone', Auth::user()->phone)->get();
        return view('frontend.users.layouts.dashboard', [
            'ticket_info' => $ticket_info,
        ]);
    }

    public function purchase_history(){
        $ticket_info = DB::table('ticket_informations')->where('passenger_phone', Auth::user()->phone)->get();
        return view('frontend.users.layouts.dashboard', [
            'ticket_info' => $ticket_info,
        ]);
    }

    public function user_profile(){
        return view('frontend.users.layouts.user_profile');
    }

    public function update_profile(Request $request)
    {
        $fileName = "";
        $this->validate($request,[
            'image' => 'nullable|mimes:jpg, jpeg, png|max:10000'
        ]);
        $user_id = auth()->user()->id;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $text = $file->getClientOriginalExtension();
            $fileName = time().'.'.$text;
            $file->move('uploads/images/', $fileName);
        }
        User::where('id', $user_id)->update([
            'image'=>$fileName,
            'first_name' => $request->fName ,
            'last_name' => $request->lName ,
            'date_of_birth' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phn,
        ]);
        return redirect()->back()->with('message', 'Picture Uploaded Successfully');
    }
}
