<?php

namespace App\Http\Controllers\Front;

use App\Models\Brief;
use App\Models\Aboutus;
use App\Models\ImageContent;
use Illuminate\Http\Request;
use App\Models\TifDescription;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AboutusController extends Controller
{
    public function index()
    {
        $vision = ImageContent::where('enname','Our vision')->
        select(LaravelLocalization::getCurrentLocale().'name'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->first();

        $message = ImageContent::where('enname','Our message')->
        select(LaravelLocalization::getCurrentLocale().'name'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->first();

        $goal = ImageContent::where('enname','Our goal')->
        select(LaravelLocalization::getCurrentLocale().'name'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
        
        $aboutus = Aboutus::select('image',LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
        $images = TifDescription::select('image',LaravelLocalization::getCurrentLocale().'title'.' as title',LaravelLocalization::getCurrentLocale().'body'.' as body')->get();

        return view('front.about_us',['aboutus'=>$aboutus,'images'=>$images,'vision'=>$vision,'message'=>$message,'goal'=>$goal]);

    }
}