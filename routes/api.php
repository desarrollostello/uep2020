<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('bank', 'BanksApiController');

    Route::apiResource('departament', 'DepartamentsApiController');

    Route::apiResource('guarantie', 'GarantiasApiController');

    Route::apiResource('civilState', 'CivilStatesApiController');

    Route::apiResource('legalFigure', 'LegalFiguresApiController');

    Route::apiResource('destinationCredit', 'DestinationCreditApiController');

    Route::apiResource('periodicity', 'PeriodicitiesApiController');

    Route::apiResource('state', 'StatesApiController');

    Route::apiResource('sector', 'SectoresApiController');

    Route::apiResource('zone', 'ZonesApiController');

    Route::apiResource('province', 'ProvincesApiController');

    Route::apiResource('alert', 'AlertsApiController');

    Route::apiResource('creditLine', 'CreditLinesApiController');

    Route::apiResource('location', 'LocationsApiController');

    Route::apiResource('bankBranche', 'BankBranchesApiController');

    Route::apiResource('audit', 'AuditsApiController');

    Route::apiResource('checklist', 'ChecklistsApiController');

    Route::apiResource('disbursement', 'DisbursementsApiController');

    Route::apiResource('project', 'ProjectsApiController');

    Route::apiResource('projectAlert', 'ProjectAlertsApiController');

    Route::apiResource('projectAnnexe', 'ProjectAnnexesApiController');

    Route::apiResource('projectApplicant', 'ProjectApplicantsApiController');

    Route::apiResource('projectMovement', 'ProjectMovementsApiController');

    Route::apiResource('projectRefinancing', 'ProjectRefinancingsApiController');

    Route::apiResource('creditSubject', 'CreditSubjectsApiController');
});
