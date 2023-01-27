<?php

namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
                    dd('diff provider');
                }

                $createdUser = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUserEmail,
                    'social_id' => $socialUserId,
                    'social_type' => $provider,
                    'password' => encrypt('')
                ]);

                Auth::login($createdUser);
                return redirect()->route(RouteServiceProvider::HOME);
            } catch (\Exception $exception) {
                dd($exception->getMessage());
            }
        }
    }
}
