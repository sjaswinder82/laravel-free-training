<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\EmailVerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * show register form
     *
     * @return view
     */
    public function show() 
    {
        return view('register');
    }

    /**
     * handle form submission
     *
     * @return view
     */
    public function store(RegisterRequest $request) 
    {
        $payload = $request->only('name','email');
        $payload['password'] = bcrypt($request->input('password'));
        $payload['email_verify_token'] = \Str::random(40);

        $user = User::create($payload);
        // send the verification email to verify the email address.
        Mail::to($user->email)->send(new EmailVerificationMail($user));

        return redirect()->route('login');
    }
}
