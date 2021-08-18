<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bus_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackPagesController extends Controller
{
    public function dashboard(){
        $bus_info = DB::table('bus_services')->orderBy('created_at', 'DESC')->get();
        $total_users = DB::table('users')->get();
        return view('backend.layouts.dashboard', [
            'bus_info' => $bus_info,
            'total_users' => $total_users,
        ]);
    }
    public function add_bus_service(){
        return view('backend.layouts.add_bus_service');
    }
    public function save_bus_info(Request $request){
        $fileName = "";
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'route' => 'required',
            'bus_service_name' => 'required',
            'bus_type' => 'required',
            'bus_number' => 'nullable',
            'bus_model' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'date_range_from' => 'required',
            'date_range_to' => 'required',
            'total_seat' => 'required',
            'fare' => 'required',
            'bus_image' => 'nullable|mimes:jpg, jpeg, png|max:10000',
        ], [
            'from.required' => 'From field required',
            'to.required' => 'To field required',
            'route.required' => 'Route field required',
            'bus_service_name.required' => 'Bus Service Name field required',
            'bus_type.required' => 'Please Select Bus Type',
            'bus_model.required' => 'Gender field required',
            'departure_time.required' => 'Departure time field required',
            'arrival_time.required' => 'Arrival time field required',
            'date_range_from.required' => 'Date range from field required',
            'date_range_to.required' => 'Date range to field required',
            'total_seat.required' => 'Total seat field required',
            'fare.required' => 'Ticket Fare required',
        ]);

        if($request->hasFile('bus_image')){
            $file = $request->file('bus_image');
            $text = $file->getClientOriginalExtension();
            $fileName = time().'.'.$text;
            $file->move('uploads/bus_images', $fileName);

        }
        $bus_service = Bus_service::create([
            'bus_image'=>$fileName,
            'from' => trim($request->input('from')),
            'to' => trim($request->input('to')),
            'route' => trim($request->input('route')),
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
        ]);
        if($bus_service){
            return redirect()->route('add_bus_service')
                ->with('success','Successfully added bus service!');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id){
        $bus_id = Bus_service::find($id);

        $bus_id->from = $request->input('edit_from');
        $bus_id->to = $request->input('edit_to');
        $bus_id->route = $request->input('edit_route');
        $bus_id->bus_service_name = $request->input('edit_bus_service_name');
        $bus_id->bus_type = $request->input('edit_bus_type');
        $bus_id->bus_number = $request->input('edit_bus_number');
        $bus_id->bus_model = $request->input('edit_bus_model');
        $bus_id->departure_time = $request->input('edit_departure_time');
        $bus_id->arrival_time = $request->input('edit_arrival_time');
        $bus_id->date_range_from = $request->input('edit_date_from');
        $bus_id->date_range_to = $request->input('edit_date_to');
        $bus_id->total_seat = $request->input('edit_total_seat');
        $bus_id->fare = $request->input('edit_seat_fare');
        $bus_id->save();

        return redirect()->back()->with('success', 'Information updated successful');

    }
}
