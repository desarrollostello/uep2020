<?php

namespace App\Observers;

use App\Checklist;

class ChecklistObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Checklist  $checklist
     * @return void
     */
    public function creating(Checklist $checklist)
    {
        $checklist->user_id = Auth::user()->id;
    }
}
