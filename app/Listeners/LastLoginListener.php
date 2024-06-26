<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LastLoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Login $event
     *
     * @return void
     */
    public function handle(Login $event): void
    {
        $event->user->update(['last_login_at' => now()]);
    }
}
