<?php

namespace App\Observers;

use App\Disbursement;

class DisbursementObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Disbursement  $disbursement
     * @return void
     */
    public function creating(Disbursement $disbursement)
    {
        $disbursement->user_id = Auth::user()->id;
    }
}
