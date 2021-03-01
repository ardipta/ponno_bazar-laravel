<?php

namespace App\Http\Controllers;

use App\Models\Bus_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusTicketController extends Controller
{
    public function bus_ticket(){
        $buses_from = DB::table('bus_services')
            ->groupBy('from')
            ->get();
        $buses_to = DB::table('bus_services')
            ->groupBy('to')
            ->get();

        return view('pages.bus_ticket',[
            'buses_from' => $buses_from,
            'buses_to' => $buses_to
        ]);
    }
    public function search_result(Request $request){
        $key_from = trim($request->get('from'));
        $key_to = trim($request->get('to'));
        $key_date_range_from = trim($request->get('date_range_from'));
        $posts = Bus_service::query()
            ->where('from', 'like', "%{$key_from}%")
            ->where('to', 'like', "%{$key_to}%")
            ->whereDate('date_range_from', '<=', $key_date_range_from)
            ->whereDate('date_range_to', '>=', $key_date_range_from)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.search_result', [
            'posts' => $posts,
            'key_date_range_from' => $key_date_range_from,
            'key_from' => $key_from,
            'key_to' => $key_to,
        ]);
    }
    public function trip_info(Request $request){
        $id = trim($request->get('id'));
        $trips = DB::table('bus_services')
            ->where('id', $id)->get();
        return view('pages.trip_info', [
            'trips' => $trips
        ]);
    }

    public function confirm_ticket(Request $request){
        $id = trim($request->get('id'));
        $total_fare = trim($request->get('totalFare'));
        $seat_number = trim($request->get('seatNumber'));
        $confirms = DB::table('bus_services')
            ->where('id', $id)->get();
        return view('pages.confirm_ticket', [
            'confirms' => $confirms,
            'total_fare' => $total_fare,
            'seat_number' => $seat_number,
        ]);
    }
}
