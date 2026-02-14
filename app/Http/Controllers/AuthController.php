<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

     public function loginProses(Request $request){
        $request ->validate([
            'email' => 'required',
            'password' =>'required',
        ]);
       // dd($request);
}
}