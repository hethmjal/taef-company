<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth:sanctum')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $news = News::get();
       return $news;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   try{
        $request->validate([
            'artitle'=>'required',
            'entitle'=>'required',
           // 'image'=>'required',
            'arbody'=>'required',
            'enbody'=>'required'

        ]);
    } catch (\Illuminate\Validation\ValidationException $th) {
        return $th->validator->errors();
    }


        $news = News::create($request->all());

        return $news;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return response()->json($news);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'artitle'=>'required',
                'entitle'=>'required',
               // 'image'=>'required',
                'arbody'=>'required',
                'enbody'=>'required'

            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        $request->validate([
            'artitle'=>'sometimes|required',
            'entitle'=>'sometimes|required',
           // 'image'=>'required',
            'arbody'=>'sometimes|required',
            'enbody'=>'sometimes|required'
        ]);
        $news = News::findOrFail($id);

        $news->update($request->all());

        return response()->json($news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = Auth::guard('sanctum')->user();
        if (!$user->tokenCan('news.delete')){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $news = News::findOrFail($id);
        $news->delete();
        return response()->json([
            'message'=>'deleted success',
            'data'=>$news,
        ]);


    }
}
