<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    //

    public function Index(){
        return view('manage.settings.sliders', [
            'sliders' => Slider::latest()->get()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }


    public function Create(){
    return view('manage.settings.create_sliders')
    ->with('bheading', 'Website Settings')
    ->with('breadcrumb', 'Website Settings');
    }
    public function Store(Request $request){
        $request->validate([
            'image' => 'required',
        ]);

       //dd(request()->file('images'));

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext; 
            $image->move('images/sliders/',$fileName);
        
    }
        $data = [
            'image' =>   $fileName,
            'secondname' => $request->secondname,
            'thirdname' =>  $request->thirdname,
            'status' => 1,
        ];

       //dd($data);
        Slider::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Added Successfully');
        return back();
    }



    public function Edit($id){
        $slider = Slider::where('id', decrypt($id))->first();
        return view('manage.settings.edit_sliders',['slider'  => $slider ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Update(Request $request, $id){

        $sl = Slider::where('id', decrypt($id))->first();
        
        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image, PATHINFO_FILENAME);
            $fileName = $name.time().'.'.$ext;
            $image->move('images/sliders/',$fileName);
    }else{
        $fileName = $sl->image;
    }
        $data = [
            'image' =>  $fileName,
            'secondname' => $request->secondname,
            'thirdname' =>  $request->thirdname
        ];
         $sl->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Updated Successfully');
        return back();
    }

    public function Delete($id){
        $slider = Slider::where('id', decrypt($id))->first();
        if($slider){
            $slider->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'Slider Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function Activate($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => 1]);
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Activated Successfully');
        return back();
    }
    
    public function Deactivate($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Slider Deactivated Successfully');
        return back();
    }
   
}
