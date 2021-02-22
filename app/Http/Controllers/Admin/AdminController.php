<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $users = DB::table('users')->where('is_admin', '1')->first();

        return view('Admin.layout.dashboard', ['users' => $users]);
    }
    public function add_bus_service(){
        $users = DB::table('users')->where('is_admin', '1')->first();
        return view('Admin.layout.add_bus_service', ['users' => $users]);
    }
    public function save_bus_info(Request $request){
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'bus_service_name' => 'required',
            'bus_type' => 'required',
            'bus_number' => 'required',
            'bus_model' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'date_range_from' => 'required',
            'date_range_to' => 'required',
            'total_seat' => 'required',
            'fare' => 'required',
        ]);

        $bus_service = Bus_service::create([
            'from' => trim($request->input('from')),
            'to' => trim($request->input('to')),
            'bus_service_name' => trim($request->input('bus_service_name')),
            'bus_type' => strtolower($request->input('bus_type')),
            'bus_number' => trim($request->input('bus_number')),
            'bus_model' => trim($request->input('bus_model')),
            'departure_time' => trim($request->input('departure_time')),
            'arrival_time' => trim($request->input('arrival_time')),
            'date_range_from' => trim($request->input('date_range_from')),
            'date_range_to' => trim($request->input('date_range_to')),
            'total_seat' => trim($request->input('total_seat')),
            'fare' => trim($request->input('fare')),
            'description' => trim($request->input('desc')),
            'bus_image' => trim($request->input('bus_image')),
        ]);
        return redirect()->route('dashboard');
    }
}
