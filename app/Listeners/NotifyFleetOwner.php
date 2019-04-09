<?php

namespace App\Listeners;

use App\Events\ActivateMemo;

class NotifyFleetOwner
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ActivateMemo $event)
    {
        dump("An email was sent to the fleet owner, to notify him of the memo: '{$event->memo->title}'");
    }
}
