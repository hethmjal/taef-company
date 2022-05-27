<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\MailSender;
use App\Models\MailingList;
use App\Models\Order;
use App\Models\Services;
use GuzzleHttp\Psr7\Exception\MalformedUriException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

class OrderController extends Controller
{
    public function index($id)
    {
      $service = Services::findOrFail($id);
        return view('front.sales_contact',['service'=>$service]);
    }   

    public function store(Request $request)
    {
        
      

        $request->validate([
            'name'=>'required',
            'job_title'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'facility_name'=>'required',
            'city'=>'required',
            'g-recaptcha-response' => 'required|captcha'

        ],
        [
            'name.required'=>__('front.required name'),
            'job_title.required'=>__('front.required job title'),
            'email.required'=>__('front.required email'),
            'email.email'=>__('front.valid email'),
            'phone.required'=>__('front.required phone'),
            'facility_name.required'=>__('front.required facility'),
            'city.required'=>__('front.required city'),  
            'g-recaptcha-response.required' => __('front.capatcha'),
           // 'g-recaptcha-response.required' => 'Captcha error! try again later or contact site admin.',
          
         ] );

         if($request->subscribe == 'yes'){
             $email = MailingList::where('email',$request->email)->first();
             if ($email) {
                 
             } else {
                MailingList::create(['email'=>$request->email]);

             }
             
         }
         $num =$request->full_phone;
         $full_phone = ltrim($num, '+');
         Order::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$full_phone,
             'message'=>$request->message,
             'city'=>$request->city,
             'job_title'=>$request->job_title,
             'facility_name'=>$request->facility_name,
             'service_id'=>$request->service_id,
             'status'=>'new',
         ]);
         
         return redirect()->route('front.salescontact',$request->service_id)->with('success',__('front.complete subscribe'));
    }

   
}