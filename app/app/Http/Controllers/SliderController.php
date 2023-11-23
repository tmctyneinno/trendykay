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

    public function Create (){ 
        return view('manage.settings.create_sliders')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }


    public function storeSlider(Request $request)
    {
        // Validate the form data
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'image' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/sliders/',$imageName);
        }
        
        // Create a new slider record
        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->content = $request->input('content');
        $slider->image = $imageName; 
        $slider->status = 1;
        $slider->save();

        // If you want to return a message to the user, you can use the session or return JSON response
        return redirect()->back()->with('message', 'Slider added successfully')->with('alert', 'success');
    }

    public function StoreSliderrr(Request $request){
        dd($request->file('images'));
        $request->validate([
            'image' => 'required',
            'content' => 'required',
            'title' => 'required',
        ]);

       dd(request()->file('images'));

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext; 
            $image->move('images/sliders/',$fileName);
        
        }
        //$link = route('subpages', encrypt($request->link));
        $data = [
            'image' =>   $fileName,
            'content' => $request->content,
            'title' =>  $request->title,
            'status' => 1,
           // 'links' => $link
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
        $slid->update(['status' => null]);
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Slider Deactivated Successfully');
        return back();
    }
   
}
