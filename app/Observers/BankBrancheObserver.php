<?php

namespace App\Observers;

use App\BankBranche;

class BankBrancheObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\BankBranche  $bankBranche
     * @return void
     */
    public function creating(BankBranche $bankBranche)
    {
        $bankBranche->user_id = Auth::user()->id;
    }
}
