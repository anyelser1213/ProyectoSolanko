<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        //validando role de usuario
        if(Auth::user()->role == 1){
            $contexto = ['rol'=>'admin',];
            return view('administrador.dashboard',$contexto);

        }else if(Auth::user()->role == 2){
            return false; // dashboard usuario   view('administrador.dashboard');
        }
            
    }
}
