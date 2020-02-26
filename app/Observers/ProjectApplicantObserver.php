<?php

namespace App\Observers;

use App\ProjectApplicant;

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
}
