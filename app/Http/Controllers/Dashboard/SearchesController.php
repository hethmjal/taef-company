<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Searches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SearchesController extends Controller
{
     public function index()
    {
        $this->authorize('viewAny',Searches::class); 

        $searches = Searches::get();
        return view('admin.dashboard.searches',['searches'=>$searches]);
    }

    public function add()
    {
        $this->authorize('create',Searches::class); 

        return view('admin.dashboard.add-search');
    }

    public function store(Request $request)
    {
        $this->authorize('create',Searches::class); 

        $request->validate([
            'artitle'=>'required',
            'entitle'=>'required',
            'ardes'=>'required',
            'ardes'=>'required',
            'image'=>'required',
            'file'=>'required',
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
            if ($request->hasFile('file')) {
           
                // Filename To store
                $filenameWithExt = $request->file('file')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('file');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                 
                   $data['file'] = $image;
    
                }
                Searches::create($data);

        return redirect()->route('searches')->with('success',__('dashboard.success add'));
    }

    
    public function edit($id)
    {
        $search = Searches::findOrFail($id);
        $this->authorize('update',$search); 

        return view('admin.dashboard.update-search',['search'=>$search]);
    }

    public function update(Request $request,$id)
    { 
        $search = Searches::findOrFail($id);
        $this->authorize('update',$search); 
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
                   Storage::disk('uploads')->delete($search->image);

                }
                if ($request->hasFile('file')) {
               
                    // Filename To store
                    $filenameWithExt = $request->file('file')->getClientOriginalName ();
                    $fileNameToStore = time(). '_'. $filenameWithExt;
                    
                       $file = $request->file('file');
                       $image=$file->storeAs('/images',$fileNameToStore,[
                           'disk'=>'uploads'
                       ]);
                     
                       $data['file'] = $image;
                       Storage::disk('uploads')->delete($search->file);

                    }
                    $search->update($data);
       
            return redirect()->route('searches')->with('success',__('dashboard.success update'));

    }
    public function destroy($id)
    {
        $search = Searches::findOrFail($id);
        $this->authorize('delete',$search); 
        // delete image from images folder
        Storage::disk('uploads')->delete($search->image);
        Searches::destroy($id);
        return redirect()->route('searches')->with('success',__('dashboard.success delete'));
    }
}