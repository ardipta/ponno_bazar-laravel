<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bus_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusTicketController extends Controller
{
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
        return view('frontend.layouts.search_result', [
            'posts' => $posts,
            'key_date_range_from' => $key_date_range_from,
            'key_from' => $key_from,
            'key_to' => $key_to,
        ]);
    }
    public function trip_info(Request $request){
        $id = trim($request->get('id'));
        $journeyDate = trim($request->get('date_range_from'));
        $trips = DB::table('bus_services')
            ->where('id', $id)->get();
        return view('frontend.layouts.trip_info', [
            'trips' => $trips,
            'journeyDate' => $journeyDate
        ]);
    }
}
