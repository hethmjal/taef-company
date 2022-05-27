<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
   
    public function index()
    {
      // dd(Auth::user()->email);
        $this->authorize('viewAny',Slider::class); 
        $sliders = Slider::get();
        return view('admin.dashboard.sliders',['sliders'=>$sliders]);
    }

    public function add()
    {
        $this->authorize('create',Slider::class); 
        return view('admin.dashboard.add-slider',[]);
    }

    public function store(Request $request)
    {
        $this->authorize('create',News::class); 

        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'link'=>'required'
        

        ]);
        if ($request->hasFile('image')) {
           
            // Filename To store
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
            
               $file = $request->file('image');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
                $data = $request->all();
             
               $data['image'] = $image;
               $data['user_id'] = Auth::id();

               Slider::create($data);

            }
        return redirect()->route('sliders')->with('success',__('dashboard.success add'));
    }

    
    public function edit($id)
    {

        $slider = Slider::findOrFail($id);
        $this->authorize('update',$slider); 

        return view('admin.dashboard.update-slider',['slider'=>$slider]);
    }

    public function update(Request $request,$id)
    { 
        $slider = Slider::findOrFail($id);

        $this->authorize('update',$slider); 

        $request->validate([
        'title'=>'required',
        'link'=>'required',

    ]);
        $data = $request->all();
             
        if ($request->hasFile('image')) {
           
            // Filename To store
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
            
               $file = $request->file('image');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
               $data['image'] = $image;
               Storage::disk('uploads')->delete($slider->image);
             $slider->update($data);

            }else{
                $slider->update($request->all());

            }
            return redirect()->route('sliders')->with('success',__('dashboard.success update'));

    }
    public function destroy($id)
    {

        
        $slider = Slider::findOrFail($id);
        $this->authorize('delete',$slider); 

        // delete image from images folder
        Storage::disk('uploads')->delete($slider->image);
        Slider::destroy($id);
        return redirect()->route('sliders')->with('success',__('dashboard.success delete'));
    }
}