<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;


// use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        
      
        $validateData=$request->validate([
            'name'=>'required|max:55',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required'

        ]);
        
       

        $validateData['password']=\bcrypt($request->password);
        
        $checkUser=User::where('email',$request->email)->count();
        
    
        if(!empty($checkUser))
        return response (['message'=>'User Already Exist']);
       
      
       
      
        $user=User::create($validateData);
        
        $accessToken=$user->createToken('authToken')->accessToken;
        return response(['user'=>$user,'access_token'=>$accessToken]);

    }

    public function login(Request $request){
        $loginData=$request->validate([
            'email'=>'required|email',
            'password'=>'required'

        ]);
        if(!auth()->attempt($loginData)){
            return response(['message'=>'Invalid Credentials']);
        }
        $accessToken=auth()->user()->createToken('authToken')->accessToken;
        return response(['user'=>auth()->user(),'access_token'=>$accessToken]);
    }
    
    public function logout()
    {
      
        if(auth()->user()){
            $user=auth()->user()->token();
            $user->revoke();
            return response()->json([
                'success' => true,
                'message' => 'Logout successfully'
            ]);
            }
            else {
              return response()->json([
                'success' => false,
                'message' => 'Unable to Logout'
              ]);

        }
      
    }
}
