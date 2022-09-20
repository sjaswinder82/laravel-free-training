<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        return view('login');
    }

    public function store(LoginRequest $request) 
    {
        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials)) {
            // flash the message to session
            $request->session()->flash('status', 'Invalid credentials.');
            // Invalid credentails.
            return redirect()->back()->withInput();
        }

        // credentials are valid.
        
        // get the logges user 
        $user = Auth::user();
        if(!$user->email_verified_at) {
            $request->session()->flash('status', 'Verify Email.');
            return redirect()->route('login');
        }
        
        return redirect()->route('posts.index');
    }
}
