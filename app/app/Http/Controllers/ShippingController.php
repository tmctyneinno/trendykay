<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use Illuminate\Support\Facades\DB;
use App\News;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class ShippingController extends CheckoutController
{
    //

   
    public function createAddresss(){
        $cart =  \Cart::content()->take(4);
         $addresses['addresses']= DB::table('shippings')->where(['user_id'=> auth()->user()->id])->get();
         $news['news'] = News::latest()->get(); 
         return view('users.accounts.add-address',$addresses, $news)->with('news', News::latest()->get());
     }
 
     public function Updateship($id){
         $addresses = shipping::find(decrypt($id));
         $address['address']= DB::table('shippings')->where(['id'=>  $addresses->id])->first();
         return view('users.accounts.update-address',$address);
     }
 
     public function AddressDelete($id){
         $address = Shipping::find(decrypt($id));
         $address->delete();
         Session::flash('alert', 'success');
         Session::flash('message', 'Address Deleted Successfully');
         return redirect()->intended(route('users.address'));
     }
     public function Shipping(Request $request, $id){ 
         
    
         $valid = Validator::make($request->all(), [
             'name' => 'required',
             'address' => 'required',
             'phone' => 'required',
             'email' => 'required',
             'zip_code' => 'required',
         ]);
         if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', $valid->errors()->first());
             return back()->withInput($request->all())->withErrors($valid);
         }
         if($request->input('update')){
             $shipping = shipping::find(decrypt($id));
             $shipping->receiver_name = $request->name;
             $shipping->address = $request->address;
             $shipping->receiver_phone = $request->phone;
             $shipping->receiver_email = $request->email;
             $shipping->zip_code = $request->zip_code;
             if(isset($request->default))
                 {
                 $check = Shipping::where('user_id', auth()->user()->id)->get();
                 if(count($check) > 1){
                 DB::table('shippings')
                 ->where(['user_id'=>  auth()->user()->id, 'is_default' => '1'])
                 ->update(['is_default' => 0]);
                 $shipping->is_default = $request->default;
                 }else{
                     $shipping->is_default = 1;
                 }
             }
             $shipping->city = $request->city;
             $shipping->state = $request->state;
             $shipping->country = $request->country;
             $shipping->landmark = $request->landmark;
 
             if($shipping->save()){
                Session::flash('alert', 'success');
                Session::flash('message', 'Address Updated successfully');
                 return redirect()->back();
             }
         }  
                 $shipping = new Shipping;
                 $shipping->user_id = auth()->user()->id;
                 $shipping->receiver_name = $request->name;
                 $shipping->address = $request->address;
                 $shipping->receiver_phone = $request->phone;
                 $test = DB::table('shippings')->where(['user_id' => auth()->user()->id, 'is_default' => 1])->get();
                 if(count($test) > 0){
                     $shipping->is_default = 0;
                 }else{
                     $shipping->is_default = 1;
                 } 
                 $shipping->receiver_email = $request->email;
                 $shipping->zip_code = $request->zip_code;
                 $shipping->city = $request->city;
                 $shipping->state = $request->state;
                 $shipping->country = $request->country;
                 $shipping->landmark = $request->landmark;
                 if($shipping->save()){
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Address Added successfully');
                    return redirect()->intended(route('users.address'));
                 }
     }

}
