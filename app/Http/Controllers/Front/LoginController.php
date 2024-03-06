<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
    return view('front.login.index');
   }

   public function register()
   {
    return view('front.login.register');
   }
}