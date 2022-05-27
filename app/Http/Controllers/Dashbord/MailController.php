<?php

namespace App\Http\Controllers\Dashbord;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MailingList;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($id)
    {
        
       $order = Order::findOrFail($id); 
        return view('admin.dashboard.send-mail',['id'=>$order->id]);

    }

    
    public function sendMail(Request $request)    {
     //   dd($request);
        $order = Order::findOrFail($request->id);
        $title = $request->title;
        $body = $request->body;
        $link = $request->link;  
        Mail::to($order->email)->send(new MailSender($title, $body,$link));
        return redirect()->route('show-orders',$order->id)->with('success',__('dashboard.mail success'));
    }

    public function index2($id)
    {
        
       $message = Message::findOrFail($id); 
        return view('admin.dashboard.send-mail2',['id'=>$message->id]);

    }

    
    public function sendMail2(Request $request)    {
     //   dd($request);
     $message = Message::findOrFail($request->id); 
     $title = $request->title;
        $body = $request->body;
        $link = $request->link;  
        Mail::to($message->email)->send(new MailSender($title, $body,$link));
        return redirect()->route('dashboard.show-messages',$message->id)->with('success',__('dashboard.mail success'));
    }

    
    public function mailinglist()
    {
        $this->authorize('viewAny',MailingList::class); 

       $emails = MailingList::get(); 
        return view('admin.dashboard.mailinglist',['emails'=>$emails]);

    }

    public function toGroupMailPage(Request $request)
    {
        $this->authorize('viewAny',MailingList::class); 

       // dd($request);
        return view('admin.dashboard.send-group-mail',['emails'=>$request->emails]);

    }

    public function sendGroupMail(Request $request)    {
        $this->authorize('viewAny',MailingList::class); 

        //   dd($request);
           $title = $request->title;
           $body = $request->body;
           $link = $request->link;  
           foreach ($request->emails as $email ) {
            Mail::to($email)->send(new MailSender($title, $body,$link));
           }
           return redirect()->route('mailinglist')->with('success',__('dashboard.mail success'));
       }
    
}