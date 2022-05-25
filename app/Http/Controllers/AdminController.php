<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard(){
        return view('admin.dashboard');
    }

    public function viewImage(){
        $sliders = Slider::all();
        return view('admin.upload-image', compact('sliders'));
    }

    public function uploadImages(Request $request)
    {
        $slider = new Slider;
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/sliders/', $fileName);
            $slider->image = $fileName; 
        }
        $slider->status = $request->input('status')==true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status', 'Your image has been saved');
    }

    public function editImage($id){
        $slider = Slider::Find($id);
        return view('admin.edit-image', compact('slider'));
    }

    public function updateImage(Request $request, $id)
    {
        $slider = Slider::Find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasfile('image'))
        {
            $destination = 'images/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/sliders/', $fileName);
            $slider->image = $fileName; 
        }
        $slider->status = $request->input('status')==true ? '1':'0';
        $slider->update();
        return redirect()->back()->with('status', 'Your image has been updated');
    }
}
