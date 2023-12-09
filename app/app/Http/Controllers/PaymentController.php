<?php

namespace App\Http\Controllers;

use App\Events\ShipmentEvent;
use App\Http\Controllers\Controller;
use App\Order;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Transaction;
use Illuminate\Support\Facades\Validator;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Traits\notify;

class PaymentController extends Controller
{ use notify;
   
    public function initiatePayCheckout(Request $request){ 

                        $valid = Validator::make($request->all(), [
                                'selected_courier_id' => 'required'
                        ]);
                        if($valid->fails()){
                            Session::flash('alert', 'error');
                            Session::flash('msg', 'Please see shipping method');
                            return back();
                        }
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
        Session::put('selected_courier_id', $request->selected_courier_id);
        return redirect()->away($session->url);

    }

    public function handlePaymentSuccess(Request $request)
    {
        
        $stripe = new \Stripe\StripeClient('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        $session = $stripe->checkout->sessions->retrieve(Session::get('session_id'));
        $orderNo = Session::get('order_No');
        $selected_courier_id = Session::get('selected_courier_id');
        $session->customer;
        if($session->status == 'complete'){
            event(new ShipmentEvent($selected_courier_id, $orderNo));
           Order::where('Order_No', $orderNo)->update([
            'external_ref' => $session->payment_intent,
            'is_paid' => 1,
        ]);
        }
        $title = 'New Order Completed, Order No '.$orderNo;
        $message = 'Order Completed, payment successfully, thanks you for shopping with us';
        #============== SEND REGISTRATION DETAILS TO USER =======================
        \Cart::destroy();
        // $this->sendNotify($title, $message);
        Session::flash('alert', 'success');
        Session::flash('msg', 'Order Completed Successfully');
        return redirect()->intended(route('users.orders'));
    }

}
