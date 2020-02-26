<?php

namespace App\Observers;

use App\Audit;

class AuditObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Audit  $audit
     * @return void
     */
    public function creating(Audit $audit)
    {
        $audit->user_id = Auth::user()->id;
    }
}
