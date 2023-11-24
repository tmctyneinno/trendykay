<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Product;
use App\News;
use App\ProductVariation;
 
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function storeImage($image){
        $file = request()->file('images');
        foreach($file  as $image){
          //  dd($image);
        $name =  $image->getClientOriginalName();
        $FileName = \pathinfo($name, PATHINFO_FILENAME);
        $ext =  $image->getClientOriginalExtension();
        $time = time().$FileName;
        $fileName = $time.'.'.$ext;
        $image->move('images/products/', $fileName);
        $images[] = $fileName;
    }
        return $images;
     }
     public function add(Request $request, $id)
     { 
         
         $product = Product::find($id);
         $response = \Cart::add([
             'id' => $product->id,
             'name' => $product->name,
             'price' => $product->sale_price,
             'options' => [
                'size' => $request->size,
              ],
             'qty' => $request->qty,
             'image' => $product->image,
             'weight'=>1, 
         ])->associate('App\Product');

        // Fetch the updated cart content count
        $cartCount = \Cart::count();
        $cartcontent = \Cart::content();
     
         if($response){
          //   dd($res);
            // return response()->json($response);
            return response()->json([
                'message' => 'Cart item quantity updated successfully',
                'cartCount' => $cartCount,
                'cartcontent' => $cartcontent
            ]);
     
         if($response){
          //   dd($res);
             return response()->json($response);
         }
     }

    public function addToCart(Request $request)
    {
        // Retrieve data from the request, including qty and size
        $qty = $request->input('qty');
        $size = $request->input('size');
        $id = $request->input('cartId');

        $product = Product::find($id);
        // Perform logic to add the product to the cart
        $response = \Cart::add([
            'id' => $product->id,
            'options' => [
                'size' => $request->size,
            ],
            'name' => $product->name,
            'price' => $product->sale_price,
            'qty' => $request->qty,
            'image' => $product->image,
            'weight'=>1, 
        ])->associate('App\Product');
        // Fetch the updated cart content count
        $cartCount = \Cart::count();

       
        if($response){
        //   dd($res);
           // return response()->json($response);
            return response()->json([
                'message' => 'Cart item quantity updated successfully',
                'cartCount' => $cartCount
            ]);
            return response()->json($response);
        }
    }


    public function index()
    { 
      //  dd(\Cart::content());
        return view('users.products.carts') 
        ->with('cart', \Cart::content())
        ->with('news', News::latest()->get())
        ->with('breadcrumb', 'Shopping Cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove()
    {
        \Cart::destroy();
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dd = ProductVariation::where(['product_id' => decrypt($id), 'qty' => $request->qty])->first();
        $product = [
            'price' => $dd->price,
            'qty' =>  request()->qty
        ];
           $cart =  \Cart::update(request()->rowId,$product);
          // dd($cart);
           \Session()->flash('message', 'Cart Updated Successfully');
            return redirect()->back();
    }

 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      //dd($id.' '.$request->rowId);
        \Cart::remove($id);
        Session()->flash('message', 'Cart Deleted Successfully');
        return back();
    }

    public function updateQuantity(Request $request){
        $cartItemId = $request->cartItemId;
        $quantity = $request->quantity;

        // Fetch the updated cart content count
        $cartCount = \Cart::count();

        // Update the cart item quantity
        \Cart::update($cartItemId, $quantity);
        session()->flash('success_message', 'Cart item quantity updated successfully');
      
        return response()->json([
            'message' => 'Cart item quantity updated successfully',
            'cartContentCount' => $cartCount
        ]);
    }
     // Controller method
     public function getCartCount() {
        $cartCount = \Cart::count();
        return response()->json(['cartCount' => $cartCount]);
        // Update the cart item quantity
        \Cart::update($cartItemId, $quantity);
        session()->flash('success_message', 'Cart item quantity updated successfully');
        return response()->json(['message' => 'Cart item quantity updated successfully']);
    }
}
