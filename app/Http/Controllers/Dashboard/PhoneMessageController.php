<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SmsData;
use Illuminate\Support\Facades\Http;

class PhoneMessageController extends Controller
{
    public function index($number)
    {

        return view('admin.dashboard.mobile-message',['number'=>$number]);

    }


    public function send(Request $request) {
       // dd($request);
       $sms = SmsData::first();
       $data = [
        "userName"=>$sms->username,
        "numbers"=>$request->number,
        "userSender"=>$sms->user_sender,
        "apiKey"=>$sms->api_key,
        "msg"=>$request->body,
       ];
       $url = "https://www.msegat.com/gw/sendsms.php";

      $response = Http::withHeaders(['Content-Type'=>'application/json'])->post($url,$data);
//        return $r ;
      return redirect()->route('sendPhoneMessagePage',$request->number)->with('success',__('dashboard.mail success'));
    }
}
