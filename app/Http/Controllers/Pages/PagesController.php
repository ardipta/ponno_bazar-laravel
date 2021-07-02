<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $buses_from = DB::table('bus_services')
            ->groupBy('from')
            ->get();
        $buses_to = DB::table('bus_services')
            ->groupBy('to')
            ->get();
        return view('layouts.pages.index',[
            'buses_from' => $buses_from,
            'buses_to' => $buses_to
        ]);
    }
}
