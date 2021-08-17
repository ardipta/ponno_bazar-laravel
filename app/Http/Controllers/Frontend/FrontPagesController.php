<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontPagesController extends Controller
{
    public function index(){
        $buses_from = DB::table('bus_services')
            ->groupBy('from')
            ->get();
        $buses_to = DB::table('bus_services')
            ->groupBy('to')
            ->get();
        return view('frontend.layouts.index',[
            'buses_from' => $buses_from,
            'buses_to' => $buses_to
        ]);
    }

    public function contact(){
        return view('frontend.layouts.contact');
    }
}
