<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    function index()
    {
        return view('welcome');
    }

    function register()
    {
        return view('register');
    }
    
        function brosur()
    {
        return view('brosur');
    }

    function login()
    {
        return view('Login');
    }
    
      function dashboard()
    {
        return view('dashboard');
    }

       function kontak()
    {
        return view('kontak');
    }

     function peta()
    {
        return view('peta');
    }

     function pola()
    {
        return view('pola');
    }
}