<?php

namespace App\Http\Controllers;

use App\Models\Bus_ticket;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PagesController extends Controller
{
    public function index(){
        return view('layouts.index');
    }
    public function bus_ticket(){
        return view('pages.bus_ticket');
    }
    public function search_result(Request $request){
        $data = \DB::table('bus_tickets');
        if( $request->from){
            $data = $data->where('from', 'LIKE', "%" . $request->from . "%");
        }
        if( $request->to){
            $data = $data->where('to', 'LIKE', "%" . $request->to . "%");
        }
        if( $request->date_of_journey){
            $data = $data->where('date_of_journey', 'LIKE', "%" . $request->date_of_journey . "%");
        }
        $data = $data->paginate(10);
        return view('pages.search_result', compact('data'));
    }
}
