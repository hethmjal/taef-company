<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('front.contact_us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone' =>'required',
            'message'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ],[
            'name.required'=>__('front.required name'),
            'email.email'=>__('front.valid email'),
            'phone.required'=>__('front.required phone'),
        ]);
        
        Message::create($request->all());
        return redirect()->route('front.contact_us')->with('success',__('front.success message'));
    }
}