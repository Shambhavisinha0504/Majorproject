<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class RazorPayPaymentController extends Controller
{
public function index()
    {        
        return view('razorpayview');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api("rzp_test_nd8qyaelwR4pgg", "2u9o5n9kUTB4QbRErlxCI2FO");
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        $random=rand(0000,9999);
          return redirect('payment')->withSuccess('Payment Successfully done');
        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}


