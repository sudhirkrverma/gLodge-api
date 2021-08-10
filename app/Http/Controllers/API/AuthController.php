<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Session;
// use App\Api\Auth;


// use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        
      
        $validateData=$request->validate([
            'name'=>'required|max:55',
            'email'=>'required|email',
            'password'=>'required|min:3',
            'mobile'=>'required|min:10|max:12'

        ]);
        
       

        $validateData['password']=\bcrypt($request->password);
        
        $checkUser=User::where('email',$request->email)->count();
        
    
        if(!empty($checkUser))
        return response (['message'=>'User Already Exist','success'=>false]);
       
      
       
      
        $user=User::create($validateData);
        
        $accessToken=$user->createToken('authToken')->accessToken;
        return response(['user'=>$user,'access_token'=>$accessToken,'success'=>true]);

    }

    public function login(Request $request){
        $loginData=$request->validate([
            'email'=>'required|email',
            'password'=>'required'

        ]);
        if(!auth()->attempt($loginData)){
            return response()->json(['message'=>'Invalid Credentials','success'=>false]);
        }
        $accessToken=auth()->user()->createToken('authToken')->accessToken;
   
         return \response()->json(['user'=>auth()->user(),'access_token'=>$accessToken,'success'=>true],200);
    }
    
    public function logout(Request $request)
    {
        // return 'logout';
        if(Auth::user()){

            $user=Auth::user()->token();
            $user->revoke();

            return \response()->json([
                'success'=>true,
                'message'=>'Logout Successfully'
            ]);


        }
        else{
            return \response()->json([
                'success'=>false,
                'message'=>'Unable to Logout'
            ]);
        }
      
    }
}
