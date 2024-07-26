<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function login(Request $request){
        
        $data = $request->all();
        if(Auth::guard('admin')->attempt((['email' => $data['email'], 'password' => $data['password']]))){
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Success');
        } else {
            return back()->with('error', 'Admin Login Failure');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('error', 'Admin Logout Success');
    }
}
