<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function __invoke($token)
    {
        $user = User::where('email_verify_token', $token)->first();

        // if user not existing
        if(!$user) {
            return "Verification mail is expired.";
        }

        $user->email_verified_at = Carbon::now();
        $user->save();

        return "Email verified";
        
    }
}
