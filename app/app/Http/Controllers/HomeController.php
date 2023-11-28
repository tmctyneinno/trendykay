<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\OrderItem;
use Illuminate\Support\Carbon;
use App\Review;
use App\Notification;
use App\User;
use App\Menu;
use App\News;
use Illuminate\Support\Facades\Validator;
use App\Colorproduct;
use App\Color;
use App\FlashMsg;
use App\Sizeproduct;
use App\Size;
use App\Slider;
use App\Shipping;
use App\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = session()->get('products.recently_viewed');
            if($products){
        $datas = array_slice(array_unique($products), -5, 5, true);
            $data['recents'] = Product::whereIn('id', $datas)->take(5)->get();
        }else{
            $data['recents']  = [];
        }
        $cart =  \Cart::content()->take(4);
        $prod = Product::take(10)->orderBy('created_at','desc')->get();
        Product::inRandomOrder()->limit(20)->get();
        return view('users.home', $data )
            ->with('title', 'Index') 
            ->with('prod', $prod)
            ->with('cart', $cart) 
            ->with('colorproduct', Colorproduct::all())
            ->with('sizeproduct', Sizeproduct::all())
            ->with('jumpsuitproducts',  Product::where('category_id', 9)->simplePaginate(9))
            ->with('denimproducts',  Product::where('category_id', 9)->simplePaginate(9))
            ->with('dressproducts',  Product::where('category_id', 9)->simplePaginate(9))
            ->with('bestsallersproducts',  Product::simplePaginate(10))
            ->with('news', News::latest()->get())
            ->with('products', Product::inRandomOrder()->latest()->simplePaginate(9))
            ->with('sliders', Slider::get())
            ->with('splash', FlashMsg::latest()->latest()->first())
            ->with('categories', Category::inRandomOrder()->where('name', 'Denim')->orWhere('name', 'Dresses')->orwhere('name', 'Jumpsuit')->orwhere('name', 'Swinwear')->orwhere('name', 'Graphic')->orwhere('name', 'Swinwear')->get());
    } 

    public function productDetails($id){
        $id = decrypt($id);
        $cart =  \Cart::content()->take(4);
        $product = Product::where('id', $id)->first();
        session()->push('products.recently_viewed', $product->getKey());
                Product::where('id', $id)->update(['views' => $product->views + 1]);
                $data['rating'] = Review::where('product_id', $product->id)->take(3)->orderBy('created_at', 'desc')->get();
                $products = session()->get('products.recently_viewed');
                $datas = array_slice(array_unique($products), -5, 5, true);
                $data['recent'] = Product::whereIn('id', $datas)->take(5)->get();
                $data['related']= product::where('category_id', $product->category_id)->take(5)->get();

        return view('users.products.products', $data)
                ->with('title', $product->name)
                ->with('product', $product)
                ->with('cart',$cart)
                ->with('news', News::latest()->get())
                ->with('products', Product::latest()->take(5)->get())
                ->with('breadcrumb', $product->name)
                ->with('category', Category::latest()->get());
        }

        public function Account(){
          $title = "My Details";
          $cart =  \Cart::content()->take(4);
          $addresses= DB::table('shippings')->where(['user_id'=> auth()->user()->id, 'is_default' => '1'])->get();
          $orders = DB::table('orders')
          ->join('order_items', 'orders.order_No', '=' ,'order_items.order_No')
          ->where('orders.user_id', auth()->user()->id)
          ->latest('orders.created_at')
          ->paginate(8);
          $products = session()->get('products.recently_viewed');
          if(is_array($products)){
          $data = array_unique($products);
           $datas = array_slice($data, -10, 10, true);
           $products['recent'] = product::whereIn('id', $datas)->take(10)->latest()->get();
          }else{
              $products['recent'] = [];
          }
          return view('users.accounts.index', $products)
          ->with('orders', $orders)
          ->with('news', News::latest()->get())
          ->with('transactions', Transaction::where(['user_id' =>auth()->user()->id])->latest()->simplePaginate(10))
          ->with('cart',  $cart)->with('addresses', $addresses)->with('title',$title );  
        }

        public function UserAddress(){
            $title = "My Details";
           $cart =  \Cart::content()->take(4);
            $addresses= DB::table('shippings')->where(['user_id'=> auth()->user()->id])->latest()->paginate(4); 
            $news = News::latest()->get(); 
            return view('users.accounts.address', compact('addresses', 'title', 'cart', 'news'));
        }

        public function myOrders(){
           $cart =  \Cart::content()->take(4);
            $orders = DB::table('orders')
            ->join('order_items', 'orders.order_No', '=' ,'order_items.order_No')
            ->where('orders.user_id', auth()->user()->id)
            ->orderBy('orders.created_at', 'DESC')
            ->paginate(8);
            $news = News::latest()->get();
            return view('users.accounts.orders', compact('orders','cart', 'news'));
        }


    public function orderDetails($id){
        $cart =  \Cart::content()->take(4);
        $items= OrderItem::where(['order_No'=> decrypt($id)])->get();
        $orders = Order::where(['order_No' => decrypt($id)])->first();
        $news = News::latest()->get();
        return view('users.accounts.orderDetails', compact('orders', 'items', 'cart', 'news'));

    }


    public function recentViews(){
        $cart =  \Cart::content()->take(4);
        $products = session()->get('products.recently_viewed');
        $news = News::latest()->get();
        if(is_array($products)){
        $data = array_unique($products);
         $datas = array_slice($data, -10, 10, true);
         $products['recent'] = product::whereIn('id', $datas)->take(10)->latest()->get();
        }else{
            $products['recent'] = [];
        }
        return view('users.accounts.recent-view', $products, compact('cart', 'news'));
    }

        
        public function myTransactions(){
           $cart =  \Cart::content()->take(4);
            return view('users.accounts.transactions')
            ->with('cart',  $cart)
            ->with('news', News::latest()->get())
            ->with('transactions', Transaction::where(['user_id' =>auth()->user()->id])->latest()->simplePaginate(10))
            ->with('user', User::where('id', auth()->user()->id)->first());

        }


        public function UserDetails(){
           $cart =  \Cart::content()->take(4);
           $news = News::latest()->get();
            return view('users.accounts.profile', compact('cart', 'news'));
        }

        public function updateDetails(Request $request){
           $cart =  \Cart::content()->take(4);
           $news = News::latest()->get();
            if($request->name){
             $update_user = [
                 'name' => $request->name,
                 'email'=> $request->email
             ];
    
             DB::table('users')
              ->where('id', auth()->user()->id)
               ->update($update_user);
    
               if(!isset($request->password)){
               return redirect()->back()->with('success', 'Details Updated Successfully')->with('cart', $cart)->with('news', News::latest()->get());
            }
        }
    
            if($request->password){
             $this->validate($request, [
     
            'oldpassword' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation'=>'required'
            ]);
     
           $hashedPassword = auth()->user()->password;
            
            if (\Hash::check($request->oldpassword , $hashedPassword)) {
            if (!\Hash::check($request->password , $hashedPassword)) {
                  $users =user::find(Auth()->user()->id);
                  $users->password = bcrypt($request->password);
                  user::where( 'id' , auth()->user()->id)->update( array( 'password' =>  $users->password));
                  return redirect()->back()->with('success', 'Details Updated Successfully');
                }
                else{return redirect()->back()->with('error', 'Old Password / New Password Cannot be the Same');}
            } else{
                return redirect()->back()->with('error', 'Old Password is Incorrect');
            }
        }
    }




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
        return redirect()->back()->with('error', 'Address Deleted Successfully')->with('news', News::latest()->get());
    }

    public function Shipping(Request $request, $id){ 
        
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        if($valid->fails()){
            return back()->withInput($request->all())->withErrors($valid);
        }
        if($request->input('update')){
            $shipping = shipping::find($id);
            $shipping->receiver_name = $request->name;
            $shipping->address = $request->address;
            $shipping->receiver_phone = $request->phone;
            $shipping->receiver_email = $request->email;
            if(isset($request->default))
                {
                DB::table('shippings')
                ->where(['user_id'=>  auth()->user()->id, 'is_default' => '1'])
                ->update(['is_default' => 0]);
            $shipping->is_default = $request->default;
                }else{
                    $shipping->is_default = 0;
                }
            $shipping->zip_code = $request->postal_code;
            $shipping->city = $request->city;
            $shipping->state = $request->state;
            if($shipping->save()){
                return redirect()->back()->with('success', 'Address updated successfully')->with('news', News::latest()->get());
            }
        }  
                $shipping = new Shipping;
                $shipping->user_id = $id;
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
                $shipping->zip_code = $request->postal_code;
                $shipping->city = $request->city;
                $shipping->state = $request->state;
                if($shipping->save()){
                    return redirect()->back()->with('success', 'Address Added successfully');
                }
    }
    
    public function Categories($id){ 
        $id = decrypt($id);
        $productCount = Product::where('category_id', $id)->simplePaginate(20);

        return view('users.pages.products')

            ->with('products',  Product::where('category_id', $id)->simplePaginate(20))
            ->with('news', News::latest()->get())
            ->with('prod', Product::latest()->take(5)->get())
            ->with('productCount', $productCount->count());
    }

    public function filterColor(Request $request){
        $selectedColor = $request->input('color'); 
        
        $products  = Product::whereHas('colors', function ($query) use ($selectedColor) {
            $query->where('name', $selectedColor);
        })->simplePaginate(20);
        $productCount = $products ->count();
        $prod = Product::latest()->take(5)->get();
        $news = News::latest()->get();
        return view('users.pages.products',
         compact('productCount','products','prod', 'news'));
    }

    public function filterSize(Request $request){
        $selectedSize = $request->input('size'); 
        //dd($selectedSize);
        $products  = Product::whereHas('sizes', function ($query) use ($selectedSize) {
            $query->where('name', $selectedSize);
        })->simplePaginate(20);
        $productCount = $products ->count();
        $prod = Product::latest()->take(5)->get();
        $news = News::latest()->get();
        return view('users.pages.products',
         compact('productCount','products','prod', 'news'));
    }

    public function Color($id){ 
        $id = decrypt($id);
        $productCount = Product::where('category_id', $id)->simplePaginate(20);

        return view('users.pages.products')

            ->with('products',  Product::where('category_id', $id)->simplePaginate(20))
            ->with('news', News::latest()->get())
            ->with('prod', Product::latest()->take(5)->get())
            ->with('productCount', $productCount->count());
    }

    public function Pages($id){
        $id = decrypt($id);
        $cart =  \Cart::content()->take(4);
        $news = News::latest()->get();
        $menu = Menu::where('id', $id)->first();
        $menus = preg_replace("/\s+/", "",$menu->name);
        $product = Product::where('id', 19)->first();
        return view('users.pages'.".".$menus, compact('product', 'cart', 'news'));
    }
    
   
    public function search(Request $request)
    { 
        $search = null;
        $products = null;
        $productCount = 0;

        if(isset($request->search)){
            $search = $request->get('search');
            $products = Product::where('name', 'LIKE', "%$search%")->simplePaginate(18);
            $productCount = $products->count(); // Get the total number of products found
        }

        return view('users.pages.products', [
            'products' => $products,
            'prod' => Product::latest()->take(5)->get(),
            'news' => News::latest()->get(),
            'search' => $search,
            'productCount' => $productCount,
        ]);
    }


    public function Addreview(Request $request, $id){
            if(isset($request->name)){
            
            $proid = product::findorfail($id);
            
            $review = new Review;
            $review->product_id = $proid->id;
            $review->name = $request->name;
            $review->email = $request->email;
            $review->rating = $request->rated;
            $review->description = $request->description;
            
            if($review->save()){
                return back();
            }else{
            // Set a success message in the session
                Session::flash('success', 'Review Successfully Submitted');
                return redirect('customer.product-details') ->with('news', News::latest()->get());
            }
        }
    }

    public function privacypolicy(){
        return  view('users.pages.privacy-policy')->with('news', News::latest()->get())->with('categories', Category::inRandomOrder()->get());
    }
               

}
