<?php

namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VerificationController extends Controller
{
    use VerifiesEmails {
        verify as originalVerify;
    }

    public function __construct()
    {
        //$this->middleware('auth'); // DON'T REMOVE THIS
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
        $this->redirectTo = route(RouteServiceProvider::HOME);
    }

    public function verify(Request $request)
    {
        $request->setUserResolver(function() use ($request) {
            return User::findOrFail($request->route('id'));
        });
        return $this->originalVerify($request);
    }

    protected function verified(Request $request)
    {
        Session::flash('alert-success', 'Fiók sikeresen megerősítve.');
        Auth::guard()->login($request->user());
    }
}
