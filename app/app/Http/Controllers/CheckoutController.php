<?php

namespace App\Http\Controllers;

use App\AdminNotify;
use App\CourierRates;
use App\User;
use App\Shipping;
use App\News;
use App\Http\Requests\CheckoutRequest;
use App\Traits\CheckoutStore;
use App\Order;
use App\Mail\UserMail;
use App\Mail\OrderMail;
use App\Mail\PaymentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Auth\Authenticatable;
use App\OrderItem;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Traits\password;
use Illuminate\Support\Facades\Auth;
use App\Services\baseUrl;
use App\Traits\notify;
use Illuminate\Support\Facades\DB;
use App\Traits\GetRates;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use CheckoutStore;
    use notify;
    use GetRates;
    use password;
    private $user;
    private $OrderItem;
    private $Order;
    private $Shipping;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function send($data)
    {
        //  dd($data);
        Mail::to($data['email'])->send(new UserMail($data));
    }

    public function sendMail($data)
    {
        Mail::to($data['email'],  'orders@Trendykay.ng')->send(new PaymentMail($data));
    }
    public function OrderMail($data)
    {
        Mail::to($data['email'], 'orders@Trendykay.ng')->send(new OrderMail($data));
    }

    public function __construct()
    {
        $this->user = new User();
        $this->OrderItem = new OrderItem();
        $this->Order = new Order();
        $this->Shipping = new Shipping();
    }


    public function index()
    {

        if (auth::user()) {
            $users = auth()->user();
            $shipping = Shipping::where(['user_id' => $users->id, 'is_default' => 1])->first();
            $user = User::where('id', auth()->user()->id)->first();
        } else {
            $users = 0;
        }
        if (count(\Cart::content()) == null) {
            return redirect()->route('index');
        }

        return view('users.products.checkout')
            ->with('carts', \Cart::content())
            ->with('title', 'Checkout')
            ->with('address', $shipping ?? null)
            ->with('user', $user ?? null);
    }



    public function store(Request $request)
    {
        if (count(\Cart::content()) > 0) {
            $valid = $request->all();
            if (!auth()->user()) {
                DB::beginTransaction();
                try {
                    $user = User::where('email', $request->email)->first();
                    if ($user) {
                        Session()->flash('alert', 'danger');
                        Session()->flash('reset');
                        Session()->flash('message', 'Opps!, This customer email already exist, did you forget your Password?');
                        return redirect()->back()->withInput($valid);
                    } else {
                        #================== CREATE NEW USER ACCOUNT================
                        $pass = $this->generatePassword($request->name);
                        $request['pass'] = hash::make($pass);
                        $users = User::create($this->createUser($request));
                        #============= LOGIN USER =========================
                      Auth::loginUsingId($users->id);
                        if($users){
                            $title = 'New Customer Registered';
                            $message = 'Thanks for registrating on our system, do enjoy our services.';
                            #============== SEND REGISTRATION DETAILS TO USER =======================
                             $this->sendNotify($title, $message);
                            $data = [
                                'name' => $request->name,
                                'email' => $request->email,
                                'phone'=>$request->phone,
                                'password'=> $pass,
                             ];
                            // $this->send($data);
                        Shipping::create($this->StoreShippingAddress($request));
                        }
                    }
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollBack();
                    throw $e;
                }
                sleep(2);
            }
           
            DB::beginTransaction();
            try {
                $user = User::where('id', auth()->user()->id)->first();
           
                $orderNo = rand(1111111, 9999999).rand(1111111, 9999999);
                $cart = \Cart::content();   
                foreach ($cart as $cat) {
                    $order_list = new OrderItem;
                    $order_list->order_No = $orderNo;
                    $order_list->product_name = $cat->model->name;
                    $order_list->product_name = $cat->name;
                    $order_list->qty = $cat->qty;
                    $order_list->size = $cat->options->size;
                    $order_list->price = $cat->price;
                    $order_list->image = $cat->model->image;
                    $order_list->payable = $cat->qty * $order_list->price;
                    $order_list->user_id = $user->id;
                    $order_list->save();
                }
           
                $address = Shipping::where(['user_id' => $user->id, 'is_default' => 1])->first();
                if(!$address || $address == null ){
                    Session::flash('alert', 'error');
                    Session::flash('msg', 'Please select a default address');
                    return back();
                }
                $this->StoreOrders($orderNo);
                 $res = $this->SendRequest('M4C 4Y7', "CA", $address->zip_code??"M4C 4Y7", "Sender", false, 1.2, 5, 10, 10, "fashion", "CAD", 100);

                 if ($res['rates']) {
                    foreach ($res['rates'] as $ss) {
                        CourierRates::create([
                            'user_id' => $user->id,
                            'order_no' => $orderNo,
                            'courier_id'=>$ss['courier_id'],
                            'courier_name' => $ss['courier_name'],
                            'min_delivery_time' => $ss['min_delivery_time'],
                            'max_delivery_time' => $ss['max_delivery_time'],
                            'value_for_money_rank' => $ss['value_for_money_rank'],
                            'delivery_time_rank' => $ss['delivery_time_rank'],
                            'shipment_charge' => $ss['shipment_charge'],
                            'shipment_charge_total' => $ss['shipment_charge_total'],
                            'effective_incoterms' => $ss['effective_incoterms'],
                            'courier_does_pickup' => $ss['courier_does_pickup'],
                            'courier_dropoff_url' => $ss['courier_dropoff_url'],
                            'tracking_rating' => $ss['tracking_rating'],
                            'currency' => $ss['currency'],
                            'courier_remarks' => $ss['courier_remarks'],
                            'total_charge' => $ss['total_charge'],
                            'full_description' => $ss['full_description']
                        ]);
                    }
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
            
            return view('users.products.payment')
                ->with('user', $user)
                ->with('address', $address)
                ->with('carts', \Cart::content())
                ->with('orderNo', $orderNo)
                ->with('title', 'Checkout Payment')
                ->with('shipping_rates',  CourierRates::where('user_id', $user->id)->latest()->take(4)->orderBy('shipment_charge_total', 'ASC')->get());
        } else {
            return redirect()->route('carts.index');
        }
    }
}
