<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('salesman')){
            return redirect()->route('admin.dashboard')->with('status', 'Welcome to the admin dashboard');
        }
        else{
            return redirect()->route('user.dashboard')->with('status', 'Welcome to the dashboard');
        }
    }

    public function user()
    {
        return view('front.dashboard.index', [
            'user' => auth()->user()
        ]);
    }
}