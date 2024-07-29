<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class LoginController extends Controller
{
    public function postlogin (Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password'=>'required'
        ]);
    }

       public function logout (Request $request)
    {
       Auth::logout();
       return redirect('login');
    }
}

