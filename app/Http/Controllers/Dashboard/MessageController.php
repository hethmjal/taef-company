<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Message::class); 

        $messages = Message::latest()->get();
        return view('admin.dashboard.messages',['messages'=>$messages]);
    }

    public function show($id)
    {
        $this->authorize('viewAny',Message::class); 

        $message = Message::findOrFail($id);
        return view('admin.dashboard.show-message',['message'=>$message]);
    }
}