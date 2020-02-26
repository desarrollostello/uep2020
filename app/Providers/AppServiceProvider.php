<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->alias('bugsnag.logger', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.logger', \Psr\Log\LoggerInterface::class);
        \App\Location::observe(\App\Observers\LocationObserver::class);
        \App\Audit::observe(\App\Observers\AuditObserver::class);
        \App\BankBranche::observe(\App\Observers\BankBrancheObserver::class);
        \App\Checklist::observe(\App\Observers\ChecklistObserver::class);
        \App\CreditSubject::observe(\App\Observers\CreditSubjectObserver::class);
        \App\Disbursement::observe(\App\Observers\DisbursementObserver::class);
        \App\Project::observe(\App\Observers\ProjectObserver::class);
        \App\ProjectAlert::observe(\App\Observers\ProjectAlertObserver::class);
        \App\ProjectAnnexe::observe(\App\Observers\ProjectAnnexeObserver::class);
        \App\ProjectApplicant::observe(\App\Observers\ProjectApplicantObserver::class);
        \App\ProjectMovement::observe(\App\Observers\ProjectMovementObserver::class);
        \App\ProjectRefinancing::observe(\App\Observers\ProjectRefinancingObserver::class);
    }
}