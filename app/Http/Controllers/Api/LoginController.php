<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login (Request $request){
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
                'device'=>'',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }

        $user = User::where('email', $request->email)->first();

        //return $user;
        if ($user && Hash::check($request->password, $user->password)) {
            $device = $request->input('device',$request->userAgent());
            $token = $user->createToken($device,['news.create','news.delete']);
            return response()->json([
                'token' => $token->plainTextToken,
                'user' => $user,
            ]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

    }

    function logout(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        // logout from current device
        $user->currentAccessToken()->delete();
        // logout from all devices
       // $user->tokens()->delete();
        return response()->json(['message' => 'token deleted'], 401);

    }

    // function to logout from all device in api
    function logoutAll(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        // logout from current device
        $user->tokens()->delete();
        return response()->json(['message' => 'token deleted'], 401);

    }
}
