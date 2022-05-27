<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use App\Models\Services;
use App\Models\MailingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class OrderController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Order::class); 

        $orders = Order::latest()->get();
        $new_orders = Order::where('status','new')->latest()->get();
        $underreview_orders = Order::where('status','under review')->latest()->get();
        $underway_orders = Order::where('status','underway')->latest()->get();
        $complete_orders = Order::where('status','complete')->latest()->get();
        $canceled_orders = Order::where('status','canceled')->latest()->get();
        $unacceptable_orders = Order::where('status','unacceptable')->latest()->get();
        
        return view('admin.dashboard.orders',['orders'=>$orders,
        'new_orders'=>$new_orders,
        'underreview_orders'=>$underreview_orders,
        'underway_orders'=>$underway_orders,
        'complete_orders'=>$complete_orders,
        'canceled_orders'=>$canceled_orders,
        'unacceptable_orders'=>$unacceptable_orders,
    ]);
    }

    public function show($id)
    {
        $this->authorize('viewAny',Order::class); 

        $order = Order::where('id',$id)->first();
        return view('admin.dashboard.show-orders',['order'=>$order]);
    }


    public function changeOrderStatus(Request $request,$id)
    {
        $this->authorize('viewAny',Order::class); 

      //  dd($request);
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('show-orders',$id)->with('success',__('dashboard.change status success'));
    }

  
    public function add_order()
    {
        $this->authorize('viewAny',Order::class); 
        $services = Services::select('id',LaravelLocalization::getCurrentLocale().
        'title'.' as title')->get(); 
           return view('admin.dashboard.add-order',['services'=>$services]);

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
        ],
        [
            'name.required'=>__('front.required name'),
            'job_title.required'=>__('front.required job title'),
            'email.required'=>__('front.required email'),
            'email.email'=>__('front.valid email'),

            'phone.required'=>__('front.required phone'),
            'facility_name.required'=>__('front.required facility'),
            'city.required'=>__('front.required city'),            
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
         
         return redirect()->route('orders')->with('success',__('front.complete subscribe'));
    }

  
}