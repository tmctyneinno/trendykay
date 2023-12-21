<?php

namespace App\Http\Controllers;

use App\CourierRates;
use App\Events\ShipmentEvent;
use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Order;
use App\Shipment;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        Session::put('amount', $request->total);
        return redirect()->away($session->url);

    }

    public function handlePaymentSuccess(Request $request)
    {
        // $stripe = new \Stripe\StripeClient(config('app.StripeKey'));
        $stripe = new \Stripe\StripeClient('sk_test_51NgNdcEAO4xwJMdypdJNh2azXY9H1Aloq1V841Be4kkzTdxDAVRzkmpk1EsNDeyf3TFss6gr2jSG5JP7RTAlOdiL00P6uaN2dx');
        $session = $stripe->checkout->sessions->retrieve(Session::get('session_id'));
        $orderNo = Session::get('order_No');
        $amount = Session::get('amount');
        $selected_courier_id = Session::get('selected_courier_id');
        $session->customer;
        if($session->status == 'complete'){
            event(new ShipmentEvent($selected_courier_id, $orderNo));
          $updateOrder = Order::where('Order_No', $orderNo)->first();
          $updateOrder->update([
            'external_ref' => $session->payment_intent,
            'is_paid' => 1,
        ]);
        $shipping = Shipment::where('order_No', $orderNo)->first();
        $rate = json_decode($shipping->selected_courier);
        $data = [
          'name' => auth()->user()->name,
          'order_No' =>  $orderNo,
          'delivery_method' => 'Home Delivery',
          'receiver_name' => $shipping->receiver_name, 
          'phone' => $shipping->receiver_phone, 
          'address' => $shipping->destination_name.' '.$shipping->destination_address_line_1.' '.$shipping->destination_city.' '.$shipping->destination_state,
          'order_items' => Cart::content(),
          'shipment' => $rate['shipment_charge_total'],
          'total' => $amount,
        ];
        Cart::destroy();
        Mail::to(auth()->user()->email)->send(new OrderMail($data));
        $title = 'New Order Completed, Order No '.$orderNo;
        $message = 'Order Completed, payment successfully, thanks you for shopping with us';
         $this->sendNotify($title, $message);
        Session::flash('alert', 'success');
        Session::flash('msg', 'Order Completed Successfully');
        return redirect()->intended(route('users.orders'));
    }
    else{
        Session::flash('alert', 'error');
        Session::flash('msg', 'Something went wrong, please contact support');
        return redirect()->intended(route('users.orders'));
    }
    }

}
