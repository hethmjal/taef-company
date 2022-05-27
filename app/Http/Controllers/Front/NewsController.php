<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class NewsController extends Controller
{
    public function index()
    {


        $lastnews = News::select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',
        LaravelLocalization::getCurrentLocale().'body'.' as body')->latest()->first();
        $news = null;
        if ($lastnews) {
            $news = News::where('id','<>',$lastnews->id)->select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',
            LaravelLocalization::getCurrentLocale().'body'.' as body')->latest()->paginate(12);
        }


        return view('front.blog',['news'=>$news,'lastnews'=>$lastnews]);

    }

    public function show($id)
    {
        $news = News::select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',
        LaravelLocalization::getCurrentLocale().'body'.' as body')->findOrFail($id);

        $lastnews = News::where('id','<>',$news->id)->select('id','image','created_at',LaravelLocalization::getCurrentLocale().'title'.' as title',
       LaravelLocalization::getCurrentLocale().'body'.' as body')->latest()->first();
     //   dd($lastnews);
        return view('front.blog-detail',['news'=>$news,'lastnews'=>$lastnews]);

    }

}
