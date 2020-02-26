<?php

namespace App\Observers;

use App\ProjectAnnexe;

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
}
