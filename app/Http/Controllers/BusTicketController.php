<?php

namespace App\Http\Controllers;

use App\Mail\TicketConfirmMail;
use App\Models\Bus_service;
use App\Models\Ticket_information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        return view('layouts.pages.search_result', [
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

    public function save_ticket_info(Request $request){
        $mcnt_TxnNo ="Txn".date("Y").date("m").date("d").date("h").date("i").date("s");
        $order_no  ="ON".date("Y").date("m").date("d").date("h").date("i").date("s");
        $secret_key = "b5b50bcefaa3140c5775ed49469983da";
        $url = 'https://demo.fosterpayments.com.bd/fosterpayments/paymentrequest.php';

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'bus_service' => 'required',
            'fullName' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'emailAddress' => 'required',
            'date_from' => 'required',
            'dep_time' => 'required',
            'seat_no' => 'required',
            'fare' => 'required',
        ]);
        $email = $request->input('emailAddress');
        $from = $request->input('from');
        $to = $request->input('to');
        $bus_service = $request->input('bus_service');
        $fullName = $request->input('fullName');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $dep_time= $request->input('dep_time');
        $date_from = $request->input('date_from');
        $seat_no = $request->input('seat_no');
        $fare = $request->input('fare');

        $string = "mcnt_AccessCode=190331053509&mcnt_TxnNo=".$mcnt_TxnNo."&mcnt_ShortName=FosterTest&mcnt_OrderNo=".$order_no."&mcnt_ShopId=104&mcnt_Amount=".$fare."&mcnt_Currency=BDT";
        $urlparamForHash = http_build_query(
            array(
                'mcnt_AccessCode' => '190331053509',
                'mcnt_TxnNo' => $mcnt_TxnNo,
                'mcnt_ShortName' => 'FosterTest',
                'mcnt_OrderNo' => $order_no,
                'mcnt_ShopId' => '104',
                'mcnt_Amount' => $fare,
                'mcnt_Currency' => 'BDT'
            )
        );
        $secret = strtoupper($secret_key);
        $hashinput = hash_hmac('SHA256',$urlparamForHash,$secret);

        $domain = $_SERVER["REMOTE_ADDR"]; // or Manually put your domain name
        $ip = $_SERVER["REMOTE_ADDR"];//domain ip
        $urlparam =array(
            'mcnt_TxnNo' => $mcnt_TxnNo,
            'mcnt_ShortName' => 'FosterTest',
            'mcnt_OrderNo' => $order_no,
            'mcnt_ShopId' => '104',
            'mcnt_Amount' => $fare,
            'mcnt_Currency' => 'BDT',
            'cust_InvoiceTo' => $fullName,
            'cust_CustomerServiceName' => 'E-commarce',
            'cust_CustomerName' => $fullName,
            'cust_CustomerEmail' => $email,
            'cust_CustomerAddress' => $from,
            'cust_CustomerContact' => $phone,
            'cust_CustomerGender' => $gender,
            'cust_CustomerCity' => $from,
            'cust_CustomerState' => $from,
            'cust_CustomerPostcode' => '1212',
            'cust_CustomerCountry' => 'Bangladesh',
            'cust_Billingaddress' => 'Bangladesh',
            'cust_ShippingAddress' => 'Bangladesh',
            'cust_orderitems' => $seat_no,
            'GW' => '',
            'CardType' => '',
            'success_url' => 'https://fosterpayments.com/Success.php ',
            'cancel_url' => 'https://fosterpayments.com/cancle.php ',
            'fail_url' => 'https://fosterpayments. com/fail.php ',
            'emi_amout_per_month' =>'',
            'emi_duration' => '',
            'merchentdomainname' => $domain,
            'merchentip' => $ip,
            'mcnt_SecureHashValue' => $hashinput
        );
        $data_string = json_encode($urlparam);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string)
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $responsedate = json_decode($response, true);
        $data=$responsedate['data'];
        $redirect_url=$data['redirect_url'];
        $payment_id=$data['payment_id'];
        $payment_url=$redirect_url."?payment_id=".$payment_id;

        $details = [
            'title' => 'Thank you for confirm ticket.',
            'body' => "You have successfully confirm your ticket.Please follow the link for payment.
            ${payment_url}"
        ];


        $ticket_info = Ticket_information::create([
            'from' => trim($from),
            'to' => trim($to),
            'bus_service_name' => trim($bus_service),
            'passenger_name' => strtolower($fullName),
            'passenger_phone' => trim($phone),
            'passenger_gender' => trim($gender),
            'passenger_email' => trim($email),
            'departure_time' => trim($dep_time),
            'date_range_from' => trim($date_from),
            'booked_seat' => trim($seat_no),
            'total_fare' => trim($fare),
        ]);

        Mail::to($email)->send(new TicketConfirmMail($details));

        return redirect()->route('bus_ticket');
    }
}
