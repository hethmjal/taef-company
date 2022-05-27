<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Services::class); 

        $services = Services::get();
        return view('admin.dashboard.services',['services'=>$services]);
    }

    public function add()
    {
        $this->authorize('create',Services::class); 
        return view('admin.dashboard.add-service');
    }

    public function store(Request $request)
    {
        $this->authorize('create',Services::class); 
        $request->validate([
            'artitle'=>'required',
            'entitle'=>'required',
            'ardes'=>'required',
            'ardes'=>'required',
            'image'=>'required',
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

            }
       
                Services::create($data);

        return redirect()->route('services')->with('success',__('dashboard.success add'));
    }

    
    public function edit($id)
    {
        $service = Services::findOrFail($id);
        $this->authorize('update',$service); 
        return view('admin.dashboard.update-service',['service'=>$service]);
    }

    public function update(Request $request,$id)
    { 
        $service = Services::findOrFail($id);
        $this->authorize('update',$service); 
        
        $request->validate([
        'artitle'=>'required',
        'entitle'=>'required',
        'ardes'=>'required',
        'ardes'=>'required',

    ]);
        $data = $request->all();
            // dd($data);

            if ($request->hasFile('image')) {
               
                // Filename To store
                $filenameWithExt = $request->file('image')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                 
                   $data['image'] = $image;
                   Storage::disk('uploads')->delete($service->image);

                }
            
                    $service->update($data);
       
            return redirect()->route('services')->with('success',__('dashboard.success update'));

    }
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $this->authorize('delete',$service); 
        // delete image from images folder
        Storage::disk('uploads')->delete($service->image);
        Services::destroy($id);
        return redirect()->route('services')->with('success',__('dashboard.success delete'));
    }
}