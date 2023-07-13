<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Marketing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SmsData;
use Illuminate\Support\Facades\Storage;

class MarketingController extends Controller
{

    public function index()
    {
        
        $this->authorize('viewAny',Marketing::class);
        $sms = SmsData::first();
        $marketings = Marketing::get();
        return view('admin.dashboard.marketing',compact('marketings','sms'));
    }

    public function add()
    {
        return view('admin.dashboard.add-application',);

    }


    public function store (Request $request)
    {

        $request->validate(['title'=>'required','image'=>'required']);
        if ($request->hasFile('image')) {

            // Filename To store
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;

               $file = $request->file('image');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
                $data = $request->all();

                Marketing::create([
                    'name'=>$request->title,
                    'image'=>$image,
                ]);

            }


        return redirect()->route('marketing')->with('success',__('dashboard.success add'));
    }

    public function add_code(Request $request)
    {
        $m = Marketing::findOrFail($request->id);
        $m->code = $request->code;
        $m->save();
        return redirect()->route('marketing')->with('success',__('dashboard.success add'));

    }



    public function destroy($id)
    {
        $m = Marketing::findOrFail($id);
        Storage::disk('uploads')->delete($m->image);
        $m->delete();
        return redirect()->route('marketing')->with('success',__('dashboard.success add'));

    }



    public function add_sms_data (Request $request)
    {

        $request->validate(['username'=>'required','user_sender'=>'required','api_key'=>'required']);
        $sms = SmsData::first();

        $data = $request->all();
        if ($request->hasFile('image')) {
            // Filename To store
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
               $file = $request->file('image');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
             $data['image']= $image;
            }
        if ($sms) {
            $sms->update($data);
        } else {
            SmsData::create($data);
        }



        return redirect()->route('marketing')->with('success',__('dashboard.success add'));
    }
}
