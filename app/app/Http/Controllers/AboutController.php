<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Settings; 
use App\SettingsAboutus;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    //

    public function Index(){
       
        return view('manage.about.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Create(){
        return view('manage.about.create')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    } 


    public function Abouts(){
        return view('manage.settings.abouts');
    }

    
    public function UpdateSocials(Request $request){
        $data = [
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedIn' => $request->linkedIn,
        ];
        $testim = Settings::first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Socials updated Successfully');
        return back();
    }

    public function UpdateSettings(Request $request){

        $data = [
            'site_name' => $request->site_name,
            'site_phone' => $request->site_phone,
            'site_email' => $request->site_email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'about' => $request->about_us
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = 'logo2'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }
       
        $testim = Settings::first();
        $testim->update($data);
        Session::flash('alert', 'success');
        Session::flash('message', 'Logo pdated Successfully');
        return back();
    }

    public function UpdateAboutus(Request $request){
        $firstSettingsAboutus = SettingsAboutus::first();
        $data = [
            'about_title' => $request->about_title,
            'about_content' => $request->about_content,
            'our_vision' => $request->our_vision,
            'our_collections' => $request->our_collections,
            'quality_matters'=> $request->quality_matters,
            'sustainability' => $request->sustainability,
            'customer_experience' => $request->customer_experience,
            'privacy_policy' => $request->privacy_policy,
            'terms_conditions' => $request->terms_conditions
        ];

        $testim = SettingsAboutus::first();
       // dd($data);
        $testim->update($data);
        Session::flash('alert', 'success');
        Session::flash('message', 'Content updated Successfully');
        return back();
    }
}
