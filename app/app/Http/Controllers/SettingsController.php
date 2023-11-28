<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Settings; 
use App\Privacypolicy;
use App\Aboutus;
use App\TermsConditions;
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

    public function Aboutus(){
        $aboutus = Aboutus::first();
        return view('manage.about.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('aboutus',  $aboutus);
    }
    public function AboutusCreate(){
        $aboutus = Aboutus::first();
        return view('manage.about.create')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('aboutus',  $aboutus);
    }

    public function AboutusStore(Request $request){
        $data = [
            'content' => $request->content,
        ];
    
        $record = Aboutus::firstOrCreate([], $data);
    
        Session::flash('alert', 'success');
        Session::flash('message', 'About us created Successfully');
        return back();
    }

    public function AboutusEdit($id){
        $aboutus = Aboutus::where('id', decrypt($id))->first();
        return view('manage.about.edit')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('aboutus',  $aboutus);
    }

    public function AboutusUpdate(Request $request, $id)
    {
      
        $aboutus = Aboutus::where('id', decrypt($id))->first();
       
        $aboutus->content = $request->input('content');
       
        $aboutus->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'About us updated Successfully');
        return redirect()->route('admin.settings.aboutus');
    }

    public function AboutusDelete($id){
        $record = Aboutus::where('id', decrypt($id))->first();
        if($record){
            $record->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'Record Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function PrivacyPolicy(){
        $privacypolicy = Privacypolicy::first();
        return view('manage.privacy.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('privacypolicy',  $privacypolicy);
    }

    public function PrivacyPolicyCreate(){
        $privacypolicy = Privacypolicy::first();
        return view('manage.privacy.create')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('privacypolicy',  $privacypolicy);
    }

    public function PrivacyPolicyStore(Request $request){
        $data = [
            'content' => $request->content,
        ];
    
        $record = Privacypolicy::firstOrCreate([], $data);
    
        Session::flash('alert', 'success');
        Session::flash('message', 'Privacy and Policy created Successfully');
        return back();
    }

    public function PrivacyPolicyEdit($id){
        $privacypolicy = Privacypolicy::where('id', decrypt($id))->first();
        return view('manage.privacy.edit')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('privacypolicy',  $privacypolicy);
    }

    public function PrivaprivacyUpdate(Request $request, $id)
    {
       
        $privacypolicy = Privacypolicy::where('id', decrypt($id))->first();
       
        $privacypolicy->content = $request->input('content');
       
        $privacypolicy->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Privacy policy updated Successfully');
        return redirect()->route('admin.settings.privacyPolicy');
    }

    public function PrivacyPolicyDelete($id){
        $record = Privacypolicy::where('id', decrypt($id))->first();
        if($record){
            $record->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'Record Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function TermsConditions(){
        $termscondition = TermsConditions::first();
        return view('manage.termsConditions.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('termscondition',  $termscondition);
    }

    public function  TermsConditionsCreate(){
        return view('manage.termsConditions.create')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function TermsConditionsStore(Request $request){
        $data = [
            'content' => $request->content,
        ];
    
        $record = TermsConditions::firstOrCreate([], $data);
    
        Session::flash('alert', 'success');
        Session::flash('message', 'Terms and Conditions created Successfully');
        return back();
    }

    public function TermsConditionsEdit($id){
        $termsConditions = TermsConditions::where('id', decrypt($id))->first();
        return view('manage.termsConditions.edit')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('termsConditions',  $termsConditions);
    }

    public function TermsConditionsUpdate(Request $request, $id)
    {  
        $record = TermsConditions::where('id', decrypt($id))->first();
       
        $record->content = $request->input('content');
       
        $record->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Terms Conditions updated Successfully');
        return redirect()->route('admin.settings.termsConditions');
    }

    public function TermsConditionsDelete($id){
        $record = TermsConditions::where('id', decrypt($id))->first();
        if($record){
            $record->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'Record Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function UpdateSocials(Request $request){
        $data = [
            'facebook' => $request->facebook,
            'tiktok' => $request->tiktok,
            'pinterest' => $request->pinterest,
            'instagram' => $request->instagram,
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
            'about' => $request->about_us,
            'terms_conditions' => $request->terms_conditions
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
