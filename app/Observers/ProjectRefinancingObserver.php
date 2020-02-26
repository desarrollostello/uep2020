<?php

namespace App\Observers;

use App\ProjectRefinancing;

class ProjectRefinancingObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\ProjectRefinancing  $projectRefinancing
     * @return void
     */
    public function creating(ProjectRefinancing $projectRefinancing)
    {
        $projectRefinancing->user_id = Auth::user()->id;
    }
}
