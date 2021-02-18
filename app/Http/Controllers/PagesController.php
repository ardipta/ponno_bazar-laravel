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
}
