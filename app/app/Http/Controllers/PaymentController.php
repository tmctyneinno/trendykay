<?php

namespace App\Http\Controllers;

use App\Events\ShipmentEvent;
use App\Http\Controllers\Controller;
use App\Shipment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\User;
use Illuminate\Support\Facades\Session;
use DB;
use Paystack;
use App\Transaction;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
   

    public function initiatePayCheckout(Request $request){ 
        Stripe::setApiKey('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'CAD',
                        'product_data' => [
                            "name" => $request->email,
                        ],
                        'unit_amount'  =>  $request->total * 100,
                    ],
                    'quantity'   => 1,                   
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('payment.success'), // Use the 'true' parameter to get the absolute URL
            'cancel_url'  => route('payment.cancel'),
        ]);

        $order = Shipment::where('order_No', $request->orderNo)->first();
        if(!isset($order)){
            event(new ShipmentEvent($request->selected_courier_id, $request->orderNo));
        }
        
        Session::put('session_id',$session->id);
        return redirect()->away($session->url);

    }

    public function handlePaymentSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        $session = $stripe->checkout->sessions->retrieve(Session::get('session_id'));
        $session->customer;
        if($session->status == 'complete'){
            
           

        }
        $session->payment_status;
        $session->amount_total;
        $customer = $stripe->customers->retrieve($session);
    }

}
