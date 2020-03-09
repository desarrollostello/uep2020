<?php

namespace App\Observers;

use App\ProjectAnnexe;
use App\Project;
use Carbon\Carbon;


class ProjectAnnexeObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\ProjectAnnexe  $projectAnnexe
     * @return void
     */
    public function creating(ProjectAnnexe $projectAnnexe)
    {
        $projectAnnexe->user_id = Auth::user()->id;
    }
    public function created(ProjectAnnexe $projectAnnexe)
    {
        $date = Carbon::now();
        $projectAnnexe->projects->last_movement_date = $date->format('Y-m-d');
        $projectAnnexe->projects->save();
    }
}
