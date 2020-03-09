<?php

namespace App\Observers;

use App\ProjectApplicant;
use App\Project;
use Carbon\Carbon;

class ProjectApplicantObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\ProjectApplicant  $projectApplicant
     * @return void
     */
    public function creating(ProjectApplicant $projectApplicant)
    {
        $projectApplicant->user_id = Auth::user()->id;
    }
    public function created(ProjectApplicant $projectApplicant)
    {
        $date = Carbon::now();
        $projectApplicant->projects->last_movement_date = $date->format('Y-m-d');
        $projectApplicant->projects->save();
    }
}
