<?php
//auth controller which mandles auth requests 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    //register function that creates a new user and saves it
    public function Register(Request $request){


        //data validation
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);


        
        //create user using validated data
        $user = User::create([
            "name"=> $fields['name'],
            "email"=>$fields['email'],
            "password"=>bcrypt($fields['password'])
        ]);

        //create token 
        $token = $user->createToken('tokenSecret')->plainTextToken;

        //create response 
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return Response($response , 201);
    }

       //login user
       public function Login(Request $request){

        $fields = $request->all();
        
        //find user with email
        $user = User::where('email' , $fields['email'])->first();

        //compare user password with fields password
        if(!$user || !Hash::check($fields['password'], $user->password)){

            //if bad login, return error resposne
            return Response(['message' => 'bad credentials'] , 401);

        }


        //create token 
        $token = $user->createToken('tokenSecret')->plainTextToken;

        //create response 
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return Response($response , 201);
    }

    //logout function that delete the users token
    public function Logout(Request $request){

        //destroy token
        auth()->user()->tokens()->delete();

        return[
            'message' => 'logged out'
        ];
    }
}
