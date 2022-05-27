<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\MailingList;
use Illuminate\Http\Request;

class MailingListController extends Controller
{
public function subscribe(Request $request)
{
    $email = MailingList::where('email',$request->email)->first();
    if ($email) {
        
    } else {
       MailingList::create(['email'=>$request->email]);

    }
    return redirect()->route('home')->with('success',__('front.success sub'));
}
    
}