<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\PurchaseTicket;
use App\Models\User;
use App\Models\UsersPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketPurchaseController extends Controller
{
    public function confirm_ticket(Request $request){
        if (Auth::user()) {   // Check is user logged in
            $id = trim($request->get('id'));
            $journeyDate = trim($request->get('journeyDate'));
            $total_fare = trim($request->get('totalFare'));
            $seat_number = trim($request->get('seatNumber'));
            $confirms = DB::table('bus_services')
                ->where('id', $id)->get();
            return view('frontend.layouts.confirm_ticket', [
                'confirms' => $confirms,
                'total_fare' => $total_fare,
                'seat_number' => $seat_number,
                'journeyDate' => $journeyDate,
            ]);
        } else {
            return redirect()->back()->with('login_error', 'You have to login first!!');
        }
    }

    public function save_ticket_info(Request $request): \Illuminate\Http\RedirectResponse
    {
        $mcnt_TxnNo ="Txn".date("Y").date("m").date("d").date("h").date("i").date("s");
        $journey_id  ="PB".date("Y").date("m").date("d").date("h").date("i").date("s");
        $secret_key = "b5b50bcefaa3140c5775ed49469983da";
        $url = 'https://demo.fosterpayments.com.bd/fosterpayments/paymentrequest.php';
        $discountFare=0;
        $discountAmount=0;
        $cashbackAmount=0;
        $paymentMethod = "";

        $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'coupon' => 'nullable',
        ]);
        $email = $request->input('emailAddress');
        $from = $request->input('from');
        $to = $request->input('to');
        $bus_id = $request->input('bus_id');
        $fullName = $request->input('fullName');
        $phone = $request->input('phone');
        $coupon = $request->input('coupon');
        $dep_time= $request->input('dep_time');
        $journey_date = $request->input('journey_date');
        $seat_no = $request->input('seat_no');
        $fare = $request->input('fare');
        $getCouponText = Coupon::where('coupon_text', $coupon)->value('coupon_text');;
        $getCouponType = Coupon::where('coupon_text', $coupon)->value('type');
        $getCouponValue = Coupon::where('coupon_text', $coupon)->value('value');
        $getCurrentBalance = Auth::user()->current_balance;
        $getCashbackBalance = Auth::user()->cashback_balance;
        if(isset($_POST['walletBalance'])){
            $ticketFare = $fare-$getCurrentBalance;
            $paymentMethod = "Wallet";
            $walletBalance = $getCurrentBalance-$fare;
            if ($ticketFare<=0){
                $ticketFare = 0;
            }
            if($walletBalance<=0){
                $availableWalletBalance=0;
            }
            else{
                $availableWalletBalance=$walletBalance;
            }
            $updateBalance = User::where('phone', $phone)->update([
                'current_balance' => $availableWalletBalance
            ]);
            if (!$updateBalance){
                return redirect()->back()->with('error', 'Error in update user');
            }
        }
        else{
            $ticketFare = $fare;
        }
        if($coupon != ""){
            if(!$getCouponText){
                return redirect()->back()->with('error', 'Coupon Not Found');
            }
            else{
                $paymentMethod = "Coupon";
                if($getCouponType == "percentage"){
                    $discountFare = $fare-(($fare*$getCouponValue)/100);
                    $discountAmount=$getCouponValue."%";
                    $cashbackAmount = $fare*$getCouponValue/100;

                }
                else{
                    $discountFare = $fare-($getCouponValue);
                    $discountAmount="BDT".$getCouponValue;
                    $cashbackAmount = $getCouponValue;
                }
                $updateUser = User::where('phone', $phone)->update([
                    'cashback_balance' => $getCashbackBalance+$cashbackAmount,
                    'current_balance' => $getCurrentBalance+$cashbackAmount
                ]);
                if (!$updateUser){
                    return redirect()->back()->with('error', 'Error in update user');
                }
            }
        }



//        $string = "mcnt_AccessCode=190331053509&mcnt_TxnNo=".$mcnt_TxnNo."&mcnt_ShortName=FosterTest&mcnt_OrderNo=".$order_no."&mcnt_ShopId=104&mcnt_Amount=".$fare."&mcnt_Currency=BDT";
//        $urlparamForHash = http_build_query(
//            array(
//                'mcnt_AccessCode' => '190331053509',
//                'mcnt_TxnNo' => $mcnt_TxnNo,
//                'mcnt_ShortName' => 'FosterTest',
//                'mcnt_OrderNo' => $order_no,
//                'mcnt_ShopId' => '104',
//                'mcnt_Amount' => $fare,
//                'mcnt_Currency' => 'BDT'
//            )
//        );
//        $secret = strtoupper($secret_key);
//        $hashinput = hash_hmac('SHA256',$urlparamForHash,$secret);
//
//        $domain = $_SERVER["REMOTE_ADDR"]; // or Manually put your domain name
//        $ip = $_SERVER["REMOTE_ADDR"];//domain ip
//        $urlparam =array(
//            'mcnt_TxnNo' => $mcnt_TxnNo,
//            'mcnt_ShortName' => 'FosterTest',
//            'mcnt_OrderNo' => $order_no,
//            'mcnt_ShopId' => '104',
//            'mcnt_Amount' => $fare,
//            'mcnt_Currency' => 'BDT',
//            'cust_InvoiceTo' => $fullName,
//            'cust_CustomerServiceName' => 'E-commarce',
//            'cust_CustomerName' => $fullName,
//            'cust_CustomerEmail' => $email,
//            'cust_CustomerAddress' => $from,
//            'cust_CustomerContact' => $phone,
//            'cust_CustomerGender' => $gender,
//            'cust_CustomerCity' => $from,
//            'cust_CustomerState' => $from,
//            'cust_CustomerPostcode' => '1212',
//            'cust_CustomerCountry' => 'Bangladesh',
//            'cust_Billingaddress' => 'Bangladesh',
//            'cust_ShippingAddress' => 'Bangladesh',
//            'cust_orderitems' => $seat_no,
//            'GW' => '',
//            'CardType' => '',
//            'success_url' => 'https://fosterpayments.com/Success.php ',
//            'cancel_url' => 'https://fosterpayments.com/cancle.php ',
//            'fail_url' => 'https://fosterpayments. com/fail.php ',
//            'emi_amout_per_month' =>'',
//            'emi_duration' => '',
//            'merchentdomainname' => $domain,
//            'merchentip' => $ip,
//            'mcnt_SecureHashValue' => $hashinput
//        );
//        $data_string = json_encode($urlparam);
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/json',
//            'Content-Length: ' . strlen($data_string)
//        ));
//        $response = curl_exec($ch);
//        curl_close($ch);
//        $responsedate = json_decode($response, true);
//        $data=$responsedate['data'];
//        $redirect_url=$data['redirect_url'];
//        $payment_id=$data['payment_id'];
//        $payment_url=$redirect_url."?payment_id=".$payment_id;
//
//        $details = [
//            'title' => 'Thank you for confirm ticket.',
//            'body' => "You have successfully confirm your ticket.Please follow the link for payment.
//            ${payment_url}"
//        ];

        if($ticketFare==0){
            //prevent redirect to payment gateway
        }


        $purchase_info = PurchaseTicket::create([
            'journey_id' => trim($journey_id),
            'user_id' => Auth::user()->id,
            'from' => trim($from),
            'to' => trim($to),
            'purchase_date' => date("Y/m/d"),
            'journey_date' => trim($journey_date),
            'bus_id' => trim($bus_id),
            'departure_time' => trim($dep_time),
            'number_of_seat' => trim($seat_no),
            'fare' => trim($fare),
            'discounted_fare' => $discountFare,
            'discount_amount' => $discountAmount,
            'journey_status' => "Pending",
            'payment_method' => $paymentMethod,
            'validity' => date('Y-m-d',strtotime('+30 days',strtotime($journey_date))) . PHP_EOL,
        ]);

        $user_info = UsersPurchase::create([
            'journey_id' => trim($journey_id),
            'user_name' => trim($fullName),
            'user_mobile' => trim($phone),
            'user_email' => trim($email),
            'cashback_amount' => $cashbackAmount,
        ]);
        if($purchase_info && $user_info){
            return redirect()->route('users.dashboard')->with('success', 'Ticket purchase successful!');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }

//        Mail::to($email)->send(new TicketConfirmMail($details));


    }
}
