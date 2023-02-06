<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): RedirectResponse
    {
        if (auth()->check()) {
            return redirect()->route(RouteServiceProvider::HOME);
        }

        return redirect()->route(RouteServiceProvider::LOGIN);
    }
}
