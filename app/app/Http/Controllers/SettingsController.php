<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Settings;
use App\Privacypolicy;
use App\TermsConditions;
use App\AboutUs;
use App\FlashMsg;
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
        $aboutus = AboutUs::first();
        return view('manage.about.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings')
        ->with('aboutus',  $aboutus);
    }
    public function AboutusCreate(){
        $aboutus = AboutUs::first();
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
            'city' => $request->city,
            'about' => $request->about_us,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = 'logo'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }
       
        $testim = Settings::first();
        $testim->update($data);
        Session::flash('alert', 'success');
        Session::flash('message', 'Logo Updated Successfully');
        return back();
    }

    public function flashMsg(){
        return view('manage.flashMsg.create')
        ->with('flashMsg', FlashMsg::latest()->first())
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function flashMsgUpdate(Request $request){

        
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'content' => $request->content,
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'flash'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['image'] = $fileName;
        }

        FlashMsg::updateOrCreate($data);
        Session::flash('alert', 'success');
        Session::flash('message', 'Message Updated Successfully');
        return back();
    }

    public function FlashMsgDelete(){

       $flash = FlashMsg::first();
       $flash->delete();
       Session::flash('alert', 'error');
       Session::flash('message', 'Message Deleted Successfully');
       return back();  

    }


}
