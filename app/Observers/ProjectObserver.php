<?php

namespace App\Observers;

use App\Project;

class ProjectObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function creating(Project $project)
    {
        $project->user_id = Auth::user()->id;
    }

    public function updated(Project $project)
    {
        //$project->user_id = Auth::user()->id;
    }
}
