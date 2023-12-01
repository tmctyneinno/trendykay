<?php

namespace App\Http\Controllers;

use App\AdminNotify;
use App\Order;
use App\OrderItem;
use App\Shipping;
use App\Mail\DispatchedMail;
use App\Transaction;
use App\Notification;
use App\CurrencyExchange;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use App\Project;
use App\Product;
use Intervention\Image\Facades\Image;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Admin;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
      public function sendMail($data){
        Mail::to($data['email'], 'orders@Trendykay.ng')->send(new DispatchedMail($data));
    }
    
    
    public function index(){

        return view('manage.users.index')
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index')
        ->with('products', count(Product::all()))
        ->with('users', count(User::all()))
        ->with('order', count(Order::all()))
        ->with('orders', Order::latest()->take(5)->get())
        ->with('sales', DB::table('orders')->sum('amount'));
    }


    public function Order(){
        return view('manage.sales.orders')
                ->with('orders', Order::latest()->get())
                ->with('bheading', 'Users Orders')
                ->with('breadcrumb', 'Orders');
    }

    public function OrderDetails($id){
        $orderItems = OrderItem::where('order_No', decrypt($id))->get();
        return view('manage.sales.orderDetails')
                ->with('ordersItems', $orderItems)
                ->with('bheading', 'Order Details')
                ->with('breadcrumb', 'Order details');
    }

    public function Shipping($id){
        $delivery = [];
        $order = Order::where('order_No', decrypt($id))->first();
    
        $shipment = Shipment::where('order_No', $order->order_No)->first();
        if($shipment){
            $delivery = json_decode($shipment->selected_courier, true);
        }
   
        
       // dd($cc->user->id);
        return view('manage.sales.shipping')
                ->with('shipping', Shipping::where('id', $order->shipping_id)->first())
                ->with('bheading', 'Shipping Address')
                ->with('delivery', $delivery)
                ->with('breadcrumb', 'Shipping Address');
    }

    public function status($id){
        return view('manage.sales.status')
                ->with('order', Order::where('order_No', decrypt($id))->first())
                ->with('bheading', 'Update Status')
                ->with('breadcrumb', 'Update Status');
    }

    public function updateStatus(Request $request, $id){
        $id = decrypt($id);
        $order = Order::where('order_No', $id)->first();
            //  dd($request->all());
            
              $dd =  Order::where('order_No', $order->order_No)
                ->update([
                'is_delivered' => $request->delivery,
                'dispatch_status' => $request->dispatch,
                'is_paid' => $request->payment
                ]);
                if($request->payment == 1){
                    $ref = "SFSL".rand(111111,999999);
                    Order::where('order_No', $order->order_No)
                    ->update(['payment_ref' => $ref]);
                }

                if($dd){
                if($order->dispatch_status != 1 && $request->dispatch == 1){
                $order_list = OrderItem::where('order_No', $order->order_No )->get();
                $shipping = Shipping::where('id', $order->shipping_id )->first();
                //dd($shipping);
                $datas = [
                'order_No' => $order->order_No,
                'name' => $shipping->receiver_name,
                'amount' => $order->amount,
                'email' => $shipping->receiver_email,
                'receiver_name' => $shipping->receiver_name,
                'phone' => $shipping->receiver_phone,
                'address' => $shipping->address,
                'delivery_method' => $shipping->delivery_method,
                'order_items' => $order_list,
                ];
                // $this->sendMail($datas);
                }
                \Session::flash('alert', 'success');
                \Session::flash('message', 'Status Updated Successfully');
                return redirect()->back();
                }
    }

    public function Transactions(){
        return view('manage.sales.transactions')
            ->with('transactions', Transaction::latest()->get())
            ->with('bheading', 'Payment Transactions')
                ->with('breadcrumb', 'Transactions');

    }

    public function Users(){
        return view('manage.users.users')
                ->with('users', User::latest()->get())
                ->with('bheading', 'Users')
                ->with('breadcrumb', 'Users');

    }

    public function UserOrders($id){
        return view('manage.sales.orders')
                ->with('orders', Order::where('user_id', decrypt($id))->get())
                ->with('bheading', 'User\'s Orders' )
                ->with('breadcrumb', 'Order');
    }
    public function UserTransactions($id){
        return view('manage.sales.transactions')
                ->with('transactions', Order::where('user_id', decrypt($id))->get())
                ->with('bheading', 'User\'s Transactions' )
                ->with('breadcrumb', 'Transactions');

    }

    public function getDownloads($img){
        $file=public_path()."/images/products/".decrypt($img);
        return response()->download($file);
    }


    public function notify(){
        return view('manage.users.notify')
        ->with('bheading', 'Send Notification' )
        ->with('breadcrumb', 'Send Notification');
    }

    public function pushNotify(Request $request){
        $validate = $this->validate($request, [
            'title' => 'required',
            'message'=>'required'
        ]);
        if($validate){
            $users = User::all();
            foreach($users as $user){
            $notify = new Notification;
            $notify->user_id = $user->id;
            $notify->title = $request->title;
            $notify->message = 'Dear '.$user->name. ' '.$request->message;
            if($notify->save()){
                $notifyCount = $user->notifyCount + 1;
                user::where('id', $user->id)->update(['notifyCount'=>$notifyCount]);
            }
            }
            \Session::flash('alert', 'success');
            \Session::flash('message', 'Notification sent Successfully');
            return redirect()->back();
        }else{
            return back()->withInputErrors();
        }
    }

    public function updateNotify($id){
        AdminNotify::where('id', decrypt($id))
            ->update([
                'is_read' => 1
            ]);
            return back();
    }

    public function Analytical(){
        $data['users'] = User::where('updated_at', '>=', Carbon::now()->subHours(50))->latest()->get();
        $data['active'] = count($data['users']);
        $data['recentActive'] = User::where('updated_at', '>=', Carbon::now()->subMinutes(50))->latest()->get();
        $data['recent'] = count($data['recentActive']);
        $data['new_users'] = User::where('created_at', '>=', today()->subHours(12))->latest()->get();
        $data['thisweek'] = User::where('created_at', '>=', today()->subDays(7))->latest()->get();
        $data['today'] = count( $data['new_users']);
        $data['week'] = count( $data['thisweek']);
        $data['orders'] = Order::where('created_at', '>=', Carbon::now()->subHours(24))->latest()->get();
        $data['order'] = count($data['orders']);
        $data['av_orders'] = Order::where('created_at', '>=', Carbon::now()->subDays(7))->latest()->get();
        $data['tt_order'] = count($data['orders']);
        return view('manage.analytical', $data)
        ->with('bheading', 'Analytics' )
        ->with('breadcrumb', 'Analytics');

    }

    public function adminProfile(){
        $admin = Admin::where('id', auth('admin')->user()->id)->first();
        return view('manage.profile', compact('admin'))
        ->with('bheading', 'Admin Profile')
        ->with('breadcrumb', 'Update Admin Details');
    }

    public function updateProfile(Request $request){
        $pass = $this->validate($request, [
            'oldPassword' => 'required',
            'password' => 'required|min:5',
            ]);
           $hashedPassword = auth('admin')->user()->password;
           $pass =  bcrypt($request->password);
        // dd($pass);
        //  $dd =  \Hash::check($request->oldPassword , $hashedPassword);
                // dd($dd);
            if (\Hash::check($request->oldPassword , $hashedPassword)) {
           //  dd($hashedPassword);
            if (!\Hash::check($request->password , $hashedPassword)) {
                  $users_password = bcrypt($request->password);
                  Admin::where( 'id' , auth('admin')->user()->id)->update(['password' =>  $users_password]);
                  \Session::flash('alert', 'alert-success');
                  \Session::flash('pass','Password Updated Successfully');
                  return redirect()->back();
                }
                else{
                 \Session::flash('alert', 'alert-danger');
                 \Session::flash('pass','Old / New Password Cannot be the Same');
                 return redirect()->back();
                 } 
            } else{
           //  dd($hashedPassword);
             \Session::flash('alert', 'alert-danger');
             \Session::flash('pass','Old Password is Incorrect');
                return redirect()->back();
            }
    }

    public function AdminNotify_clear(){
        $notify = AdminNotify::all();
        foreach($notify as $clear){
            $clear->delete();
        }
        return redirect()->back();
        \Session::flash('alert', 'success');
        \Session::flash('message','Notification clear');
    }

    public function ProjectIndex(){
        return view('manage.projects.index')->with('projects', Project::latest()->get())
        ->with('bheading', 'Projects')
        ->with('breadcrumb', 'Projects Index');
    }

    public function ProjectCreate(){
        return view('manage.projects.create')
        ->with('bheading', 'Projects')
        ->with('breadcrumb', 'Create Projects');
    }

    public function ProjectStore(Request $request){
        $valid = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'images' => 'required',
        ]);
  
        if($valid->fails()){
        \Session::flash('alert', 'error');
        \Session::flash('message','Some field are missing');
        return back();
        }
       $project = new Project;
       $project->title = $request->title;
       $project->content = $request->content;
      if($request->file('images')){
        foreach($request->file('images') as $images){
            $ex = $images->getClientOriginalExtension();
            $fileNames = time().".".$ex;
            Image::make($images)->resize(500,550)->save('images/projects/'.$fileNames);
            $imageFile[] = $fileNames;
            sleep(1);
        }
        $dd = json_encode($imageFile);
        $project->images = $dd;
        $project->image = $imageFile[0];
       }
    
       if($project->save()){
       \Session::flash('alert', 'sucess');
       \Session::flash('message','Project added Successfully');
       return back();
    }
        \Session::flash('alert', 'error');
         \Session::flash('message','Request Failed, something went wrong');
       return back();
    }

    public function ProjectDelete($id){
        $project = Project::find(decrypt($id));
        $project->delete();
        \Session::flash('alert', 'error');
       \Session::flash('message','Project deleted Successfully');
        return back();
    }

    public function ExchangeRate(Request $req){
         $req->validate([
            'rate' => 'required|integer'
        ]);
        $products = Product::latest()->get();
        CurrencyExchange::first()->update(['rate' =>$req->rate ]);
        foreach($products as $pro){
            $pro->update(['exchange_rate' => $pro->sale_price/$req->rate]);
        }
        \Session::flash('alert', 'success');
        \Session::flash('message','All Products Exchange Rate Updated Successfully');
        return back();
    }

}
