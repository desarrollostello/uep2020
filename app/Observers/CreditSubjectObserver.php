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
    public function created(CreditSubject $creditSubject)
    {
        $date = Carbon::now();
        $creditSubject->project->last_movement_date = $date->format('Y-m-d');
        $creditSubject->project->date_shipping_bank = $creditSubject->date_shipping_bank;
        $creditSubject->project->bank_response_date = $creditSubject->bank_response_date;
        $creditSubject->project->save();
    }
}
