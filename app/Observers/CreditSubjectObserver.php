<?php

namespace App\Observers;

use App\CreditSubject;

class CreditSubjectObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\CreditSubject  $creditSubject
     * @return void
     */
    public function creating(CreditSubject $creditSubject)
    {
        $creditSubject->user_id = Auth::user()->id;
    }
}
