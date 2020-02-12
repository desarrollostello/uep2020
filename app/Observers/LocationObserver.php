<?php

namespace App\Observers;

use App\Location;

class LocationObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Location  $location
     * @return void
     */
    public function creating(Location $location)
    {
        $location->user_id = Auth::user()->id;
    }
}
