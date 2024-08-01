<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authenticationController extends Controller
{
    public function index(){
        return view("auth.register");

    }
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save(); 

        auth()->login($user);
            
    }

    public function loginform(){
        return view("auth.login");
    }
    public function login(Request $request){
       if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
        return redirect("/");
       }  else{
        return redirect('/login');
       }          
    }
}
