<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bus_service;
use App\Models\PurchaseTicket;
use App\Models\User;
use App\Models\UsersPurchase;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard(){
        $userPhone = Auth::user()->phone;
        $userId = Auth::user()->id;
        $userPurchaseInfo = UsersPurchase::where('user_mobile', $userPhone)->get();
        $purchaseInfo = PurchaseTicket::where('user_id', $userId)->get();
        $getBusId = PurchaseTicket::where('user_id', $userId)->value('bus_id');
        $getBusInfo = Bus_service::where('id', $getBusId)->get();
        return view('frontend.users.layouts.dashboard', [
            'userPurchaseInfo' => $userPurchaseInfo,
            'purchaseInfo' => $purchaseInfo,
            'getBusInfo' => $getBusInfo,
        ]);
    }

    public function confirmed(){
        $userPhone = Auth::user()->phone;
        $userId = Auth::user()->id;
        $userPurchaseInfo = UsersPurchase::where('user_mobile', $userPhone)->get();
        $purchaseInfo = PurchaseTicket::where('user_id', $userId)
            ->where('journey_status', "Confirm")
            ->get();
        $getBusId = PurchaseTicket::where('user_id', $userId)->value('bus_id');
        $getBusInfo = Bus_service::where('id', $getBusId)->get();
        return view('frontend.users.layouts.purchase.confirm', [
            'userPurchaseInfo' => $userPurchaseInfo,
            'purchaseInfo' => $purchaseInfo,
            'getBusInfo' => $getBusInfo,
        ]);
    }

    public function pending(){
        $userPhone = Auth::user()->phone;
        $userId = Auth::user()->id;
        $userPurchaseInfo = UsersPurchase::where('user_mobile', $userPhone)->get();
        $purchaseInfo = PurchaseTicket::where('user_id', $userId)
            ->where('journey_status', "Pending")
            ->get();
        $getBusId = PurchaseTicket::where('user_id', $userId)->value('bus_id');
        $getBusInfo = Bus_service::where('id', $getBusId)->get();
        return view('frontend.users.layouts.purchase.pending', [
            'userPurchaseInfo' => $userPurchaseInfo,
            'purchaseInfo' => $purchaseInfo,
            'getBusInfo' => $getBusInfo,
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
