<?php

namespace App\Observers;

use App\ProjectMovement;

class ProjectMovementObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\ProjectMovement  $projectMovement
     * @return void
     */
    public function creating(ProjectMovement $projectMovement)
    {
        $projectMovement->user_id = Auth::user()->id;
    }
}
