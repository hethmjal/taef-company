<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RoleController extends Controller
{
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $this->authorize('role',$user); 

        return view('admin.dashboard.roles',['user'=>$user]);   
    }


    public function store(Request $request,$user_id)
    {
       // dd($request);
        $user = User::findOrFail($user_id);
        $this->authorize('role',$user); 

        $user->roles = $request->roles;
        $user->save();
        return redirect()->route('users')->with('success',__('dashboard.success update'));   
    }
}