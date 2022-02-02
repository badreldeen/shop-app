<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request)
    {

         
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6'
        ]);
    
        if ($validator->fails()) {
           
           //return $validator->errors()->toJson();
           return response()->json([
            'message' => $validator->errors()
                 
          ],400);
        }

        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email
        ]);
       
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }




    //use this method to signin users
    public function signin(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
            'message' => 'Invalid login details'
            ], 401);
        }
            
        $user = User::where('email', $request['email'])->firstOrFail();
            
        $token = $user->createToken('auth_token')->plainTextToken;
            
        return response()->json([
           'message' =>"success",
           'data'=> $token
           
        ],200);
    }

    public function myAccount(Request $request)
    {
        return response()->json([
            'user' => $request->user()
            
         ]);
        
    }

    // this method signs out users by removing tokens
    public function signout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
