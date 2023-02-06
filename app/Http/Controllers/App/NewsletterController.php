<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Newsletter\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $executed = RateLimiter::attempt(
            'subscribe-newsletter:'.$request->ip(),
            $perMinute = 1,
            static function() use ($request) {
                $email = $request->get('email');

                if($email) {
                    $newsletter = Newsletter::create(['email' => $email]);

                    Session::flash('alert-success', 'Hírlevél feliratkozás sikeres.');
                }
            },
            60 * 60
        );

        if (! $executed) {
            Session::flash('alert-info', 'Már feliratkoztál a hírlevélre.');
        }

        return redirect()->back();
    }
}
