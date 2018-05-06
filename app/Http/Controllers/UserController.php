<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function allUsers(){
        return User::all();
    }

    public function login(Request $request){

        $user = new User();
        
        $email = $request->input('email');
        $password = $request->input('password');
        //$usertype = $request->input('usertype');
        $result = 0;
        /*if($usertype == 1){
            $result = User::where("email",$email)->where("password",$password)->where("usertype",$usertype)->count();
            $user = User::where("email",$email)->where("password",$password)->where("usertype",$usertype)->get();
        }else{
            $result = User::where("email",$email)->where("password",$password)->where("usertype",$usertype)->count();
            $user = User::where("email",$email)->where("password",$password)->where("usertype",$usertype)->get();
        }*/

        $result = User::where("email",$email)->where("password",$password)->count();
        $user = User::where("email",$email)->where("password",$password)->get();

        $status = $result > 0 ;
        $userid = $user;
        
        return ["status" => $status, "user" => $userid];
    }
}
