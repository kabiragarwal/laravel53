<?php

namespace App\Listeners;

use App\Events\userBecomepremium;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendThankYouEmail
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
     * @param  userBecomepremium  $event
     * @return void
     */
    public function handle(userBecomepremium $event)
    {
        //
    }
}
