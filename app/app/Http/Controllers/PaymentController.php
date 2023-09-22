<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\User;
use DB;
use Paystack;
use App\Transaction;
use Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
   
    public function initiatePayCheckout(Request $request){
        $custemail = auth()->user()->email;
        $custphone = auth()->user()->phone;
        $custname = auth()->user()->name;
        $amount = $request->total;
       // $orderNo = $request->orderNo;
        // Set your Stripe API key
        
        Stripe::setApiKey('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
       
        
 
        // Create a Stripe Checkout Session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $custemail,
                        ],
                        'unit_amount'  =>  $amount * 100,
                    ],
                    'quantity'   => 1,                   
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('payment.success'), // Use the 'true' parameter to get the absolute URL
            'cancel_url'  => route('payment.cancel'),
        ]);
        $session_id = $session->id;
        
        return redirect()->away($session->url);

    }

    public function handlePaymentSuccess(Request $request)
    {
        Stripe::setApiKey('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        // $session =  $stripe->issuing->transactions->retrieve(
        //         'ipi_1GswaK2eZvKYlo2Co7wmNJhD',[]
        // );
        $session_id = $request;
        // $payload = $request;
        // Assuming you have already created the Stripe Checkout Session and it's successful
        // Assuming you have already created the Stripe Checkout Session and it's successful
       // $session = \Stripe\Checkout\Session::retrieve($request);
      //  $payload = $request;
        //dd($session);
        dd($session_id);
        // Capture the Payment Intent ID from the session
        $paymentIntentId = $session->payment_intent;

        
       
    }

}
