<?php

namespace App\Http\Controllers;

use App\Events\ShipmentEvent;
use App\Http\Controllers\Controller;
use App\Order;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
                            "name" => auth()->user()->email,
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

       
        
        Session::put('session_id',$session->id);
        Session::put('order_No', $request->orderNo);
        return redirect()->away($session->url);

    }

    public function handlePaymentSuccess(Request $request)
    {
        
        $stripe = new \Stripe\StripeClient('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        $session = $stripe->checkout->sessions->retrieve(Session::get('session_id'));
        $orderNo = Session::get('order_No');
        $session->customer;
        if($session->status == 'complete' && $session->customer_details->email == auth()->user()->email){
            event(new ShipmentEvent($request->selected_courier_id, $request->orderNo));
           Order::where('Order_No', $orderNo)->update([
            'external_ref' => $session->payment_intent,
            'is_paid' => 1,
        ]);
        }
        Session::flash('alert', 'success');
        Session::flash('msg', 'Order Completed Successfully');
        return redirect()->intended(route('users.orders'));
    }

}
