<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index(){
    	return view('login/login');
    }
    public function postlogin(Request $request){
    	if(Auth::attempt($request->only('name', 'password'))){
    		return redirect('/');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
