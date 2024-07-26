<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MkartistController extends Controller
{
    public function index(){
        return view('mkartist.login');
    }

    public function dashboard(){
        return view('mkartist.index');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('mkartist')->attempt($credentials)) {
            return redirect()->route('mkartist.dashboard')->with('success', 'Mkartist logged in successfully');
        } else {
            return redirect()->route('mkartist.login')->with('error', 'Invalid credentials');
        }
    }    

    public function logout(){
        Auth::guard('mkartist')->logout();
        return redirect()->route('mkartist.login')->with('error', 'Mkartist logout successfully');
    }
}
