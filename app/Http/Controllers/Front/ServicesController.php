<?php

namespace App\Http\Controllers\Front;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServicesController extends Controller
{
    public function index()
    {
      
        $services = Services::select('id','image','created_at',LaravelLocalization::getCurrentLocale().
        'title'.' as title',LaravelLocalization::getCurrentLocale().'des'.' as des')->paginate(12);
        return view('front.our_solutions',['services'=>$services,]);
    }   
    
    public function show($id)
    {
      
        $service = Services::where('id',$id)
    ->select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'
    .' as title',LaravelLocalization::getCurrentLocale().'des'.' as des')->first();
        return view('front.our_solutions_2',['service'=>$service,]);
    }   
    
    
}