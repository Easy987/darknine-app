<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\QRCodeGeneratorService;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function __construct(protected QRCodeGeneratorService $QRCodeGeneratorService)
    {}

    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $entryQrCode = $this->QRCodeGeneratorService->generateEntryQRCode($user);

            return view('user.profile', compact('user', 'entryQrCode'));
        }

        return redirect()->route(RouteServiceProvider::LOGIN);
    }
}
