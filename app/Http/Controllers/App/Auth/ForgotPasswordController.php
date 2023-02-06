<?php

namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        Session::flash('alert-success', 'Jelszó helyreállító email kiküldve.');

        return $request->wantsJson()
            ? new JsonResponse(['message' => trans($response)], 200)
            : back()->with('status', trans($response));
    }
}
