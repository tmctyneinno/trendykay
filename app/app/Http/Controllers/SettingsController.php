<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Settings;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    //

    public function Index(){
       
        return view('manage.settings.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

  

    public function Socials(){
       
        return view('manage.settings.socials')
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
            $fileName = 'logo'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }
        $testim = Settings::first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }
}
