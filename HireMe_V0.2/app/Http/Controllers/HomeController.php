<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function reroute(){
        
        if(Auth::id()) {
            $role = auth()->user()->role;
            if($role=='ADMIN'){
                return view('admin');
            }elseif($role=='ADMIN'){
                return view('welcome');
            }
        }
    }
}