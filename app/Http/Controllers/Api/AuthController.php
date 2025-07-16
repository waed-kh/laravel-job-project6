<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(Request $request){
       $request->validate([
        'name'=>'required',
        'email'=>'required',
       'password' => 'required|confirmed'

       ]);
      $user= User::create( $request->except('password_confirmation')
    );
      return response()->json([
        'data' => $user,
      'masage'=>'user createed sucesfully'
       ]
       ,200 ) ;

    }


    public function Login(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required:conirmed'
           ]);
           $user = User::where('email', $request->email)->first();

           if($user){
            if (Hash::check($request->password, $user->password))

            {
                $token = $user->createToken('Login');
                return response()->json([
                    'data'=>[],
                   'user'=>$user,
                  'token' => $token->plainTextToken,
                  'massage' =>' done login'
                ]);
            }
                else{
                    return response()->json([
                        'data'=>[],
                       
                      'massage' =>'  un login'
                    ]);
                }
    
             
                 

            }
   

           
            
            
              

            
            
           }


    }
