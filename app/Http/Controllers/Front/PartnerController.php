<?php

namespace App\Http\Controllers\Front;

use App\Models\Partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PartnerController extends Controller
{
    public function index( )
    {
        $partners = Partners::select('id','logo','link','created_at',LaravelLocalization::getCurrentLocale().'name'.' as name',
        LaravelLocalization::getCurrentLocale().'des'.' as des')->latest()->paginate(12); 
        return view('front.our_partners',['partners'=>$partners,]);

    }

    public function show($id )
    {
        $partner = Partners::select('id','logo','link','created_at',LaravelLocalization::getCurrentLocale().'name'.' as name',
        LaravelLocalization::getCurrentLocale().'des'.' as des')->with('images')->findOrFail($id); 
       // return $partner->images[0]->path;

        return view('front.our_partners2',['partner'=>$partner,]);

    }
  

   
    
}