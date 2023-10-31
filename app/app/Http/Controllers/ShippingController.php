<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
class ShippingController extends CheckoutController
{
    //

    public function getCustomerLocation($address){
        $key = 'AIzaSyCHsIJX1EHXN_tLXbQ75pMHcB60L3XVOeU';
        $url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyCHsIJX1EHXN_tLXbQ75pMHcB60L3XVOeU&address=".urlencode($address);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
        $responseJson = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($responseJson, true);
        if ($response['status'] == 'OK') {
            $res['lat'] = $response['results']['0']['geometry']['location']['lat'];
            $res['lng'] = $response['results']['0']['geometry']['location']['lng'];
            return $res;
        }
     }
     

    public function StoreShippingAddress($request){
        $shipping = new Shipping;
        $shipping->user_id = 0;
        $shipping->address = $request->address;
        $shipping->receiver_name = $request->name;
        $shipping->receiver_email = $request->email;
        $shipping->is_default = 0;
        $shipping->zip_code = '';
        $shipping->city = $request->city;
        $shipping->state = $request->state;
        $shipping = $shipping->save();
        return $shipping;
    }


    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $address = Shipping::where('id', $id)->first();
        $address->receiver_name = $request->receiver_name;
        $address->receiver_phone = $request->receiver_phone;
        $address->receiver_email = $request->receiver_email;
        $address->address = $request->address;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->zip_code = $request->zip_code;
        $address->save();
        Session()->flash('message', 'Address Updated');
        return redirect()->back();
 
    }

}
