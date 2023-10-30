<?php

namespace App\Traits;

trait CheckoutStore
{
/**

*@param $request 
*@return mixed  
*/

    private function CreateUser($request){
        return $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password'=> $request->pass,
        ];

    }

    private function OrderItems($request){
        $data = [
            'user_id' => auth()->user()->id,
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'price' => $request->price,
            'payable' => $request->payable,
            'qty' => $request->qty
        ];

        return $data;

    }

    private function StoreShippingAddress($request)
    {

        $data = [
            'user_id'=> auth()->user()->id,
            'receiver_name' => $request->name,
            'receiver_email' => $request->email,
            'receiver_phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'is_default' => 1,
            'state' => $request->state,
            'zip_code' =>$request->zip_code,
            'delivery_method'=>$request->delivery_method,
        ];
        return $data;
    }












}