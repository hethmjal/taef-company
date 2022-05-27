<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Group;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{
    public function index()
    {
       // dd(Auth::user()->email);
       $this->authorize('viewAny',User::class); 
        
        $users = User::where('id','<>',Auth::id())->get();
        
        return view('admin.dashboard.users',['users'=>$users]);
    }

    
    public function edit($id)
    {
        $user = User::findOrFail($id);
    //    dd($user->user_role->role->roles);
        $this->authorize('update',$user); 
        $groups = Group::get();
        return view('admin.dashboard.update_user',['user'=>$user,'groups'=>$groups]);
    }

    
    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update',$user); 

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone'=>['required'],
            'group'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'type'=>'user',
            'password' => Hash::make($request->password),
        ]);
       $role= UserRole::where('user_id')->first();
       if ($role) {
           $role->group_id->$request->group;
           $role->save();
       }else{
        UserRole::create(['user_id'=>$user->id,'group_id'=>$request->group]);
       }
        return redirect()->route('users')->with('success',__('dashboard.success update'));
 
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

         $this->authorize('delete',$user); 
         User::destroy($id);

         return redirect()->route('users')->with('success',__('dashboard.success delete'));
        }
}