<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');


    Route::delete('bank/destroy', 'BanksController@massDestroy')->name('bank.massDestroy');

    Route::resource('bank', 'BanksController');

    Route::delete('departament/destroy', 'DepartamentsController@massDestroy')->name('departament.massDestroy');

    Route::resource('departament', 'DepartamentsController');

    Route::delete('guarantie/destroy', 'GarantiasController@massDestroy')->name('guarantie.massDestroy');

    Route::resource('guarantie', 'GarantiasController');

    Route::delete('civilState/destroy', 'CivilStatesController@massDestroy')->name('civilState.massDestroy');
    Route::resource('civilState','CivilStatesController');

    Route::resource('legalFigure','LegalFiguresController');
    Route::delete('legalFigure/destroy', 'LegalFiguresController@massDestroy')->name('legalFigure.massDestroy');

    Route::resource('destinationCredit','DestinationCreditController');
    Route::delete('destinationCredit/destroy', 'DestinationCreditController@massDestroy')->name('destinationCredit.massDestroy');

    Route::resource('periodicity','PeriodicityController');
    Route::delete('periodicity/destroy', 'PeriodicityController@massDestroy')->name('periodicity.massDestroy');

    Route::resource('state','StatesController');
    Route::delete('state/destroy', 'StatesController@massDestroy')->name('state.massDestroy');

    Route::resource('sector','SectoresController');
    Route::delete('sector/destroy', 'SectoresController@massDestroy')->name('sector.massDestroy');

    Route::resource('zone','ZonesController');
    Route::delete('zone/destroy', 'ZonasController@massDestroy')->name('zone.massDestroy');

    Route::resource('province','ProvincesController');
    Route::delete('province/destroy', 'ProvincesController@massDestroy')->name('province.massDestroy');

    Route::resource('alert','AlertsController');
    Route::delete('alert/destroy', 'AlertsController@massDestroy')->name('alert.massDestroy');

    Route::resource('creditLine','CreditLinesController');
    Route::delete('creditLine/destroy', 'CreditLinesController@massDestroy')->name('creditLine.massDestroy');

    Route::resource('location','LocationsController');
    Route::delete('location/destroy', 'LocationsController@massDestroy')->name('location.massDestroy');

    Route::resource('bankBranche','BankBranchesController');
    Route::delete('bankBranche/destroy', 'BankBranchesController@massDestroy')->name('bankBranche.massDestroy');

    Route::resource('audit','AuditsController');
    Route::delete('audit/destroy', 'AuditsController@massDestroy')->name('audit.massDestroy');    

    Route::resource('creditSubject','CreditSubjectsController');
    Route::delete('creditSubject/destroy', 'CreditSubjectsController@massDestroy')->name('creditSubject.massDestroy');


    Route::resource('disbursement','DisbursementsController');
    Route::delete('disbursement/destroy', 'DisbursementsController@massDestroy')->name('disbursement.massDestroy');

    Route::resource('project','ProjectsController');
    Route::delete('project/destroy', 'ProjectsController@massDestroy')->name('project.massDestroy');

    Route::resource('projectAlert','ProjectAlertsController');
    Route::delete('projectAlert/destroy', 'ProjectAlertsController@massDestroy')->name('projectAlert.massDestroy');

    Route::resource('projectAnnexe','ProjectAnnexesController');
    Route::delete('projectAnnexe/destroy', 'ProjectAnnexesController@massDestroy')->name('projectAnnexe.massDestroy');

    Route::resource('projectApplicant','ProjectApplicantsController');
    Route::delete('projectApplicant/destroy', 'ProjectApplicantsController@massDestroy')->name('projectApplicant.massDestroy');

    Route::resource('projectMovement','ProjectMovementsController');
    Route::delete('projectMovement/destroy', 'ProjectMovementsController@massDestroy')->name('projectMovement.massDestroy');

    Route::resource('projectRefinancing','ProjectRefinancingsController');
    Route::delete('projectRefinancing/destroy', 'ProjectRefinancingsController@massDestroy')->name('projectRefinancing.massDestroy');

    Route::resource('checklist','ChecklistsController');
    Route::delete('checklist/destroy', 'ChecklistsController@massDestroy')->name('checklist.massDestroy');


});
