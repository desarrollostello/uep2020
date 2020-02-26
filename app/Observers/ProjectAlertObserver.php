<?php

namespace App\Observers;

use App\ProjectAlert;

class ProjectAlertObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\ProjectAlert  $projectAlert
     * @return void
     */
    public function creating(ProjectAlert $projectAlert)
    {
        $projectAlert->user_id = Auth::user()->id;
    }
}
