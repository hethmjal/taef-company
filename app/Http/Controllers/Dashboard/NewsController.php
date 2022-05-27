<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
      // dd(Auth::user()->email);
        $this->authorize('viewAny',News::class); 
        $news = News::get();
        return view('admin.dashboard.news',['news'=>$news]);
    }

    public function add()
    {
        $this->authorize('create',News::class); 
        return view('admin.dashboard.add-news',[]);
    }

    public function store(Request $request)
    {
        $this->authorize('create',News::class); 

        $request->validate([
            'artitle'=>'required',
            'entitle'=>'required',
            'image'=>'required',
            'arbody'=>'required',
            'enbody'=>'required'


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

               News::create($data);

            }
        return redirect()->route('news')->with('success',__('dashboard.success add'));
    }

    
    public function edit($id)
    {

        $new = News::findOrFail($id);
        $this->authorize('update',$new); 

        return view('admin.dashboard.update-news',['new'=>$new]);
    }

    public function update(Request $request,$id)
    { 
        $new = News::findOrFail($id);

        $this->authorize('update',$new); 

        $request->validate([
        'artitle'=>'required',
        'entitle'=>'required',
        'arbody'=>'required',
        'enbody'=>'required'

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
               Storage::disk('uploads')->delete($new->image);
             $new->update($data);

            }else{
                $new->update($request->all());

            }
            return redirect()->route('news')->with('success',__('dashboard.success update'));

    }
    public function destroy($id)
    {

        
        $new = News::findOrFail($id);
        $this->authorize('delete',$new); 

        // delete image from images folder
        Storage::disk('uploads')->delete($new->image);
        News::destroy($id);
        return redirect()->route('news')->with('success',__('dashboard.success delete'));
    }
}