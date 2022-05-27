<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
     //   $this->authorize('create',User::class);
        $groups = Group::get();

        return view('auth.register',['groups'=>$groups]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
     //   $this->authorize('create',User::class);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone'=>['required'],
         
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'type'=>'user',

            'password' => Hash::make($request->password),
        ]);
        UserRole::create(['user_id'=>$user->id,'group_id'=>$request->group]);

        event(new Registered($user));

        //Auth::login($user);

        return redirect()->route('users')->with('success',__('dashboard.success add'));
    }
}
