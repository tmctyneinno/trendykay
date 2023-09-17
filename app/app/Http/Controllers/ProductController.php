<?php

namespace App\Http\Controllers;

use App\Category;
use App\CurrencyExchange;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\SubCategory;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Validator;
use App\ProductVariation;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {

        $this->product = new Product;
        $this->category = new Category;
         
     }
    public function index()
    {
        $cart =  \Cart::content()->take(4);
        return view('manage.products.index')
             ->with('products', Product::latest()->get())
             ->with('bheading', 'Product')
             ->with('cart', $cart)
             ->with('breadcrumb', 'Product');
    }

    public function variation($id){

        $variation = ProductVariation::where('product_id', decrypt($id))->get();
        return view('manage.products.variation', compact('variation'))
             ->with('bheading', 'Product')
             ->with('breadcrumb', 'Product');;
    }
    public function variationEdit($id){

        $variation = ProductVariation::where('id', decrypt($id))->first();
        return view('manage.products.variationEdit', compact('variation'))
             ->with('bheading', 'Product')
             ->with('breadcrumb', 'Product');;
    }

    public function variationUpdate(Request $request, $id){
        $variation = ProductVariation::where('id', decrypt($id))->first();
        $variation->qty = $request->qty;
        $variation->price = $request->price;
        if($variation->save()){
            \Session::flash('alert', 'success');
            \Session::flash('message', 'Variation updated successfully');
            return redirect()->back();
        }

    }
    
    public function status(Request $request, $id){
        
        if($request->status == 1){
      
        $product = DB::table('products')->where('id', decrypt($id))
                    ->update(['status' => 1]);
                      \Session::flash('alert', 'error');
            \Session::flash('message', 'Product Disabled successfully');
            return redirect()->back();
        }
        elseif($request->status == 0){
                  
            $product = DB::table('products')->where('id', decrypt($id))
                    ->update(['status' => 0]);
                      \Session::flash('alert', 'success');
            \Session::flash('message', 'Product Enabled successfully');
            return redirect()->back();
        }else{
            dd('error page');
             \Session::flash('alert', 'error');
            \Session::flash('message', 'An errror occured, No changes made');
            return redirect()->back();
        }
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.products.create')
                    ->with('bheading', 'Products')
                    ->with('breadcrumb', 'Create Product')
                    ->with('category', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required|integer',
            'image' => 'required',
            'images' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
        ]);

        if($valid->fails()){
            \Session::flash('alert', 'error');
            \Session::flash('message', 'The fields with * are required');
            return redirect()->back()->withErrors($valid)->withInput($request->all())
            ->with('bheading', 'Product')
            ->with('breadcrumb', 'Index');
        }

        $currencyRate = CurrencyExchange::first();

      //  dd(request()->images);
      $cat = SubCategory::where('id', $request->category_id)->first();
      DB::beginTransaction();
      try{
        $prod = new Product;
        $prod->name= $request->name;
        $prod->category_id = $request->category_id;
        $prod->sub_category_id = 1;
        $prod->description = $request->description;
        $prod->discount = $request->discount;
        
        if($request->hasfile('specification') && !empty($request->file('specification')))
          {
            $file = request()->file('specification');
            $name = $file->getClientOriginalName();
            $FileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $time = time().$FileName;
            $fileName = $time.'.'.$ext;
            $file->move('images/pdf',$fileName);
            $prod->specification = $fileName;
          }
        $prod->price = $request->price;
        $prod->admin_id = auth('admin')->user()->id;
        $prod->sale_price = $request->sale_price;
        // $prod->percentage = ($request->price - $request->sale_price) *(($request->price - $request->sale_price)/100);
        $prod->discount = (($request->price - $request->sale_price) / $request->price) * 100;
        if($request->file('image')){
            $file = request()->file('image');
            $name = $file->getClientOriginalName();
            $FileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $time = time().$FileName;
            $fileName = $time.'.'.$ext;
            Image::make(request()->file('image'))->resize(1100,1100)->save('images/products/'.$fileName);
            $prod->image = $fileName;
        }  
        if($request->file('images')){
            
            $file = request()->file('images');
            foreach($file  as $image){
            $name =  $image->getClientOriginalName();
            $FileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext =  $image->getClientOriginalExtension();
            $time = time().$FileName;
            $dd = md5($time);
            $fileName = $dd.'.'.$ext;
            //$image->move('images/products/', $fileName);
            Image::make($image)->resize(1100,1100)->save('images/products/'.$fileName);
            $images[] = $fileName;
          
        }
        $prod->gallery= json_encode($images); 
        }
        $xx = $request->price - $request->sale_price;
        $cc = (($xx/$request->price)*100);
        $prod->percentage = $cc;

        if($prod->save()){
            if(request()->has('qty')){
            $pric = explode(',', $request->amount);
            $qty = explode(',', $request->qty);
            if(count($pric) > count($qty)){
                \Session::flash('alert', 'error');
                \Session::flash('message', 'Quantity and Price in Price Variation must have same numbers'); 
                return redirect()->back()->withErrors($valid)->withInput($request->all());
            }
            if($qty){
                foreach($pric as $key => $value){
                $eid = Product::latest()->first();
                $pp = new ProductVariation;
                $pp->price = $value;
                $pp->qty = $qty[$key];
                $pp->product_id = $eid->id;
                $pp->save(); 
            }
            
        }
    }
        }
        DB::commit();
    }catch(\Exception $e){

        DB::rollBack();
        throw $e;
    }

    \Session::flash('alert', 'success');
    \Session::flash('message', 'Product Added Successfully');  
    return redirect()->back();
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
    public function edit($id)
    {
        return view('manage.products.edit')
            ->with('product', Product::where('id', decrypt($id))->first())
            ->with('category', Category::all())
            ->with('breadcrumb', 'Product Edit')
            ->with('bheading', 'Products');

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
        
        $valid = Validator::make($request->all(), [
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
        ]);

        if($valid->fails()){
            \Session::flash('alert', 'error');
            \Session::flash('message', 'The fields with * are required');
            return redirect()->back()->withErrors($valid)->withInput($request->all())
            ->with('bheading', 'Product')
            ->with('breadcrumb', 'Index');
        }
        $currencyRate = CurrencyExchange::first();
        
        DB::beginTransaction();
        try{
          $prod = Product::where('id', decrypt($id))->first();
          $prod->name= $request->name;
          $prod->category_id = $request->category_id;
          $prod->description = $request->description;
          $prod->discount = (($request->price - $request->sale_price) / $request->price) * 100;
          if($request->hasfile('specification') && !empty($request->file('specification')))
          {
            $file = request()->file('specification');
            $name = $file->getClientOriginalName();
            $FileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $time = time().$FileName;
            $fileName = $time.'.'.$ext;
            $file->move('images/pdf', $fileName);
            $prod->specification = $fileName;
          }
          
          $prod->price = $request->price;
          $prod->sale_price = $request->sale_price;
          if($request->hasfile('image') && !empty($request->file('image'))){
              $prod->image = null;
              $file = request()->file('image');
              $name = $file->getClientOriginalName();
              $FileName = \pathinfo($name, PATHINFO_FILENAME);
              $ext = $file->getClientOriginalExtension();
              $time = time().$FileName;
              $fileName = $time.'.'.$ext;
             // Image::make(request()->file('image'))->resize(417,287)->save('images/products/'.$fileName);
            // Image::make(request()->file('image'))->resize(200,287)->save('images/products/'.$fileName);
           // Image::make(request()->file('image'))->resize(224,224)->save('images/products/'.$fileName);
            Image::make(request()->file('image'))->resize(1100,1100)->save('images/products/'.$fileName);
              $prod->image = $fileName;
          }else{
            $prod->image = $prod->image;
          }  
          if($request->hasfile('images') && !empty($request->file('images'))){
            $prod->gallery = null;
              $file = request()->file('images');
              foreach($file  as $image){
                //  dd($image);
              $name =  $image->getClientOriginalName();
              $FileName = \pathinfo($name, PATHINFO_FILENAME);
              $ext =  $image->getClientOriginalExtension();
               $time = time().$FileName;
                $dd = md5($time);
                 $fileName = $dd.'.'.$ext;
              //$image->move('images/products/', $fileName);
              Image::make($image)->resize(1100,1100)->save('images/products/'.$fileName);
              $images[] = $fileName;
          }
          $prod->gallery= json_encode($images); 
          }else{
              $prod->gallery = $prod->gallery;
          }
          $xx = $request->price - $request->sale_price;
          if($prod->save()){
            DB::commit();
            \Session::flash('alert', 'success');
            \Session::flash('message', 'Product Updated Successfully');  
            return redirect()->back();
          }
      }catch(\Exception $e){
          DB::rollBack();
          throw $e;
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
