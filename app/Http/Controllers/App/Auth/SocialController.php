<?php

namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    protected array $enabledSocialProviders;

    public function __construct()
    {
        $this->enabledSocialProviders = config('darknine.enabled_social_providers');
    }

    public function redirect(string $provider): RedirectResponse
    {
        if(Str::contains($provider, $this->enabledSocialProviders)) {
            return Socialite::driver($provider)->redirect();
        }

        return redirect()->route(RouteServiceProvider::HOME);
    }

    public function login(string $provider)
    {
        if(Str::contains($provider, $this->enabledSocialProviders)) {
            try {
                $socialUser = Socialite::driver($provider)->user();
                $socialUserId = $socialUser->getId();
                $socialUserEmail = $socialUser->getEmail();
                $user = User::where('social_id', $socialUserId)->first();

                if ($user) {
                    Auth::login($user);
                    return redirect()->route(RouteServiceProvider::HOME);
                }

                $userExists = User::where('email', $socialUserEmail)->whereNotNull('social_id')->exists();
                if($userExists) {
                    $validator = Validator::make([], [
                        'email' => 'required'
                    ], [
                        'email.required' => 'Kérjük, azzal a közösségi fiókkal jelentkezz be, amivel regisztráltál.'
                    ]);
                    return redirect()->route(RouteServiceProvider::LOGIN)->withErrors($validator);
                }

                $userExists = User::where('email', $socialUserEmail)->whereNull('social_id')->exists();
                if($userExists) {
                    $validator = Validator::make([], [
                        'email' => 'required'
                    ], [
                        'email.required' => 'A megadott fiókhoz manuális regisztráció tartozik. Kérjük, jelentkezz be email címmel és jelszóval!'
                    ]);
                    return redirect()->route(RouteServiceProvider::LOGIN)->withErrors($validator);
                }

                $createdUser = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUserEmail,
                    'social_id' => $socialUserId,
                    'social_type' => $provider,
                    'password' => encrypt(Str::random())
                ]);

                Auth::login($createdUser);
                return redirect()->route(RouteServiceProvider::HOME);
            } catch (\Exception $exception) {
                $validator = Validator::make([], [
                    'email' => 'required'
                ], [
                    'email.required' => 'Hiba történt a bejelentkezés során.'
                ]);
                return redirect()->route(RouteServiceProvider::LOGIN)->withErrors($validator);
            }
        }
    }
}
