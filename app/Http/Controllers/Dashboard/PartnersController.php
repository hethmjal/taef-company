<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PartnerImage;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny',Partners::class); 

        $parteners = Partners::get();
        return view('admin.dashboard.parteners',['parteners'=>$parteners]);
    }

    public function add()
    {
        $this->authorize('create',Partners::class); 

        return view('admin.dashboard.add-partener',[]);
    }

    public function store(Request $request)
    {
        $this->authorize('create',Partners::class); 

        $request->validate([
            'arname'=>'required',
            'enname'=>'required',
            'ardes'=>'required',
            'ardes'=>'required',
            'logo'=>'required',
            
        ]);
        if ($request->hasFile('logo')) {
           
            // Filename To store
            $filenameWithExt = $request->file('logo')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
            
               $file = $request->file('logo');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
                $data = $request->all();
             
               $data['logo'] = $image;

            }
          $partner =   Partners::create($data);
          if($request->hasFile('gallary')){
            foreach ($request->file('gallary') as $file) {
                $image_path=$file->store('/partnerImages',[
                    'disk'=>'uploads'
                ]);
                $partner->images()->create([
                    'path' => $image_path,
                ]);

            }
        }
        return redirect()->route('parteners')->with('success',__('dashboard.success add'));
    }

    
    public function edit($id)
    {
        $partner = Partners::findOrFail($id);
        $this->authorize('update',$partner); 

        return view('admin.dashboard.update-partener',['partner'=>$partner]);
    }

    public function update(Request $request,$id)
    { 
        $partener = Partners::findOrFail($id);
        $this->authorize('update',$partener); 

        $request->validate([
        'arname'=>'required',
        'enname'=>'required',
        'ardes'=>'required',
        'ardes'=>'required',

    ]);
        $data = $request->all();
            // dd($data);
        if ($request->hasFile('logo')) {
           
            // Filename To store
            $filenameWithExt = $request->file('logo')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
            
               $file = $request->file('logo');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
               $data['logo'] = $image;
               Storage::disk('uploads')->delete($partener->logo);
             $partener->update($data);

            }else{
                $partener->update($request->all());

            }
            if($request->hasFile('gallary')){
                foreach ($request->file('gallary') as $file) {
                    $image_path=$file->store('/partnerImages',[
                        'disk'=>'uploads'
                    ]);
                    $partener->images()->create([
                        'path' => $image_path,
                    ]);

                }
            }
            return redirect()->route('parteners')->with('success',__('dashboard.success update'));

    }
    public function destroy($id)
    {
        $partener = Partners::findOrFail($id);
        $this->authorize('delete',$partener); 

        // delete image from images folder
        Storage::disk('uploads')->delete($partener->logo);
        Partners::destroy($id);
        return redirect()->route('parteners')->with('success',__('dashboard.success delete'));
    }

    public function destroyImage(Request $request)
    {
        $image = PartnerImage::findOrFail($request->id);

        // delete image from images folder
        Storage::disk('uploads')->delete($image->path);
        PartnerImage::destroy($request->id);
        return $image;
    }
}