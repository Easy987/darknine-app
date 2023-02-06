<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return view('user.profile');
        }

        return redirect()->route(RouteServiceProvider::LOGIN);
    }
}
