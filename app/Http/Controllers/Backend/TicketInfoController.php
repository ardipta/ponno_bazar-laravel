<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bus_service;
use App\Models\PurchaseTicket;
use App\Models\UsersPurchase;
use Illuminate\Http\Request;

class TicketInfoController extends Controller
{
    public function ticketInfo(){
        $userPurchaseInfo = UsersPurchase::orderBy('created_at', 'DESC')->get();
        $purchaseInfo = PurchaseTicket::orderBy('created_at', 'DESC')->get();
        return view('backend.layouts.ticket.purchase_info', [
            'userPurchaseInfo' => $userPurchaseInfo,
            'purchaseInfo' => $purchaseInfo,
        ]);
    }


}
