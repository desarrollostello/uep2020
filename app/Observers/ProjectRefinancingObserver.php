<?php

namespace App\Observers;

use App\ProjectRefinancing;
use App\Project;
use Carbon\Carbon;

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
    public function created(ProjectRefinancing $projectRefinancing)
    {
        $date = Carbon::now();
        $projectRefinancing->projects->last_movement_date = $date->format('Y-m-d');
        $projectRefinancing->projects->save();
    }
}
