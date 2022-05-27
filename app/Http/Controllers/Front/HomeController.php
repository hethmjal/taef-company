<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Brief;
use App\Models\Slider;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\TifDescription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Artisan;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function index()
    {

        $brief1 = Brief::where('name','home')->select(LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
        $brief2 = Brief::where('name','footer')->select(LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
        $images = TifDescription::select('image',LaravelLocalization::getCurrentLocale().'title'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->get();
        $sliders = null;
        $slider = Slider::first();
        if($slider){
            $sliders = Slider::where('id','<>',$slider->id)->get();

        }
        $services = Services::select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',LaravelLocalization::getCurrentLocale().'des'.' as des')->get();
        $news = News::select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->latest()->first();
        return view('front.index',['images'=>$images,'brief1'=>$brief1,'brief2'=>$brief2,'sliders'=>$sliders,'slid'=>$slider,'news'=>$news,'services'=>$services,]);
    }

    public function soon()
    {
        return view('front.soon');
    }
    public function a(Request $request)
    {
     //  $request->validate(['image'=>'required']);

        return response()->json($request->all());
    //  return "hallo";
      if ($request->hasFile('image')) {

        // Filename To store
        $filenameWithExt = $request->file('image')->getClientOriginalName ();
        $fileNameToStore = time(). '_'. $filenameWithExt;

           $file = $request->file('image');
           $image=$file->storeAs('/images',$fileNameToStore,[
               'disk'=>'uploads'
           ]);


        }
        if ($request->hasFile('audio_data')) {

            // Filename To store
           // $filenameWithExt = $request->file('audio_data')->getClientOriginalName ();
            $fileNameToStore = time(). '_sound'.".wav";
         //   dd( $fileNameToStore );
               $file = $request->file('audio_data');
               $image=$file->storeAs('/audio',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);

            }



}
public function b(Request $req)
{
    dd($req);
}
}
