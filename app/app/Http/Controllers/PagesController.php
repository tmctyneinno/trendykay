<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Menu;
use App\News;
use App\Product;
use App\Privacypolicy;
use App\AboutUs;
use App\TermsConditions;
use App\Project;
use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    //

    public function AddMenu(){
        return view('manage.menu.create')
        ->with('bheading', 'Add Menu')
        ->with('news', News::latest()->get())
        ->with('breadcrumb', 'Add Menu');
    }

    public function createMenu(Request $request){
        $valid = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('m','Some fields are missing');
            return back();
        }
         Menu::create([
            'name' => $request->name
         ]);
         Session::flash('alert', 'success');
         Session::flash('message','Menu created successfully');
         return back();

    }

    public function MenuIndex(){
        return view('manage.menu.index')
        ->with('bheading', 'Menu List')
        ->with('breadcrumb', 'Menu List')
        ->with('menu', Menu::get());
    }


    public function EditMenu($id){ 
        $id = Menu::where('id', decrypt($id))->first();
        
        return view('manage.menu.edit')
        ->with('bheading', 'Edit Menu')
        ->with('breadcrumb', 'Edit Menu')
        ->with('menu', $id);
    }

    public function updateMenu(Request $request, $id){
        $id = Menu::where('id', decrypt($id))->first()
        ->update(['name' => $request->name]);
        Session::flash('alert', 'success');
        Session::flash('message','Menu updated successfully');
        return back();
    }

    public function Pages($slug){
        switch($slug){
            case "home":
                return app('App\Http\Controllers\HomeController')->Index();
                break;
            case "projects":
             return view('users.pages.projects')->with('projects', Project::inRandomOrder()->get())->with('news', News::latest()->get())
                ->with('recent', Project::take(5)->latest()->get());
                break;
            case "products":
                $productCount = Product::inRandomOrder()->take(10)->orderBy('sale_price','ASC')->get();
                $products['prod'] = Product::inRandomOrder()->take(5)->orderBy('created_at','desc')->get();
                $products['pro'] = Product::inRandomOrder()->take(10)->orderBy('sale_price','ASC')->get();
                $products['products'] = Product::inRandomOrder()->orderBy('created_at','desc')->paginate(20);
                $cart['cart'] =  \Cart::content()->take(4);
                $news['news'] = News::latest()->get();
               return view('users.pages.products', $products, $cart )->with('news', News::latest()->get())->with('productCount', $productCount->count());
                break;
            case "news":
               return view('users.pages.news')->with('news', News::latest()->get())
               ->with('recent', News::latest()->take(5)->get());
            break;
            case "about": 
                return view('users.pages.about')->with('news', News::latest()->get());
             break;
            case "contacts":
                return view('users.pages.contact') 
                ->with('contact', ContactUs::latest()->first())->with('news', News::latest()->get());
                break;
            default:
            return view('errors.404'); 
            break;
        }
    }

    public function newsDetails($id){
        return view('users.pages.news-details')
        ->with('newss', News::where('id', decrypt($id))->first())
        ->with('news', News::latest()->get())
        ->with('recent', News::latest()->take(5)->get());
    }


    public function privacypolicy(){
        $news = News::latest()->get();
        $privacypolicy = Privacypolicy::first();
        return  view('users.pages..privacy-policy')
        ->with('privacypolicy', $privacypolicy)
        ->with('news',$news);
    }

    public function Terms(){
        $news = News::latest()->get();
        $termscondition = TermsConditions::first();
        return  view('users.pages..termsConditions')
        ->with('termscondition', $termscondition)
        ->with('news',$news);
    }


    public function about(){
        $news = News::latest()->get();
        return  view('users.pages.about-us')
                ->with('news',$news)
                ->with('news',$news);
    }


}
