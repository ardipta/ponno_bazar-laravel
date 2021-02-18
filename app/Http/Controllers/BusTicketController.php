<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusTicketController extends Controller
{
    public function bus_ticket(){
        $buses = DB::table('bus_services')->get();
        return view('pages.bus_ticket',['buses' => $buses]);
    }
    public function search_result(Request $request){
        $data = DB::table('bus_services');
        if( $request->from){
            $data = $data->where('from', 'LIKE', "%" . $request->from . "%");
        }
        if( $request->to){
            $data = $data->where('to', 'LIKE', "%" . $request->to . "%");
        }
        if( $request->date_of_journey){
            $data = $data->where('date_range_from', 'LIKE', "%" . $request->date_range_from . "%");
        }
        $data = $data->paginate(10);
        return view('pages.search_result', compact('data'));
    }
}
