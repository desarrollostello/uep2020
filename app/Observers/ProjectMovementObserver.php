<?php

namespace App\Observers;

use App\ProjectMovement;
use App\Project;
use Carbon\Carbon;

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

    public function created(ProjectMovement $projectMovement)
    {
        $date = Carbon::now();
        $projectMovement->projects->last_movement_date = $date->format('Y-m-d');
        $projectMovement->projects->save();
    }
}
