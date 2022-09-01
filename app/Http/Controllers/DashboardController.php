<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        //validando role de usuario
        if(Auth::user()->role == 1)
            return view('administrador.dashboard');
        elseif(Auth::user()->role == 2)
            return false; // dashboard usuario   view('administrador.dashboard');
    }
}
