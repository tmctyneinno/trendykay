<?php
namespace App\Http\Controllers;

use App\AdminNotify;
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
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use CheckoutStore;
    use notify;
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

    public function send($data){
     //  dd($data);
        Mail::to($data['email'])->send(new UserMail($data));
    }
    
    public function sendMail($data){
        Mail::to($data['email'],  'orders@sofarsolar.ng')->send(new PaymentMail($data));
    }
     public function OrderMail($data){
        Mail::to($data['email'], 'orders@sofarsolar.ng')->send(new OrderMail($data));
    }

     public function __construct()
     {
         $this->user = new User();
         $this->OrderItem = new OrderItem();
         $this->Order = new Order();
         $this->Shipping = new Shipping();
     }
  

    public function index(){

        if(auth::user()){
            $users = auth()->user();
            $shipping= Shipping::where(['user_id' => $users->id, 'is_default' => 1])->first();
            $user = User::where('id', auth()->user()->id)->first();
        }else{
            $users = 0;
        }
        if(count(\Cart::content()) == null){
            return redirect()->route('index');
        }

        return view('users.products.checkout')
        ->with('carts', \Cart::content())
        ->with('title', 'Checkout')
        ->with('address', $shipping??null)
        ->with('user', $user??null);
    }



  
    public function store(Request $request){

        if(count(\Cart::content())>0){
            $valid = $request->all(); 
            if(!auth()->user()){
                DB::beginTransaction();
                try{
                    $user = User::where('email', $request->email)->first();
                    if($user){
                        Session()->flash('alert', 'danger');
                        Session()->flash('reset');
                        Session()->flash('message', 'Opps!, This customer email already exist, did you forget your Password?');
                        return redirect()->back()->withInput($valid);
                    }else{
                        #================== CREATE NEW USER ACCOUNT================
                        $pass = $this->generatePassword($request->name);
                        $request['pass'] = hash::make($pass);
                        $users = User::create($this->createUser($request));
                        //dd($uu);
                        #============= LOGIN USER =========================
                        Auth::login($users);
                       
                        // if($users){
                        //     $title = 'New Customer Registered';
                        //     $message = 'Thanks for registrating on our system, do enjoy our services.';
                        //     #============== SEND REGISTRATION DETAILS TO USER =======================
                        //     $this->sendNotify($title, $message);
                        //     $data = [
                        //         'name' => $request->name,
                        //         'email' => $request->email,
                        //         'phone'=>$request->phone,
                        //         'password'=> $pass,
                        //      ];
                        //     $this->send($data);
                        // }
                    }
                    
                }catch(\Exception $e){
                    DB::rollBack();
                    throw $e;
                }   
            }
           
            DB::beginTransaction();
            $user = User::where('id', auth()->user()->id)->first();
            try{
                $orderNo = rand(1111111,9999999).rand(1111111,9999999);
                $cart = \Cart::content();
               
                foreach($cart as $cat){
                    $order_list = new OrderItem;
                    $order_list->order_No = $orderNo;
                    $order_list->product_name = $cat->model->name;
                    $order_list->product_name = $cat->name;
                    $order_list->qty = $cat->qty;
                    $order_list->size = $cat->options->size;
                    $order_list->price = $cat->price;
                    $order_list->image = $cat->model->image;
                    $order_list->payable = $cat->qty*$order_list->price;
                    $order_list->user_id = $user->id;
                    $order_list->save(); 

                }
                $address = Shipping::where(['user_id' => $user->id, 'is_default' => 1])->first();
                if(!$address){   
                    $address = Shipping::create($this->StoreShippingAddress($request));
                }

                //get shipping information 

                $test = new baseUrl("https://api.easyship.com/2023-01/addresses", "get", "sand_7Kq0UOMKfMN25wnc6PWAGpLupRyI2Ee4fOauyItMJkM=");
                 $tests = $test->Client();
               
               $ss =  json_decode($tests->getBody(), true);

               dd($ss);
                DB::commit();
            }catch(\Exception $e){
                DB::rollBack();
                throw $e;
            }  
        
            return view('users.products.payment')
            ->with('user', $user)
            ->with('address', $address)
            ->with('carts', $cart)
            ->with('title', 'Checkout Payment');
        }else{
            return redirect()->route('carts.index');
        }
    }


}
