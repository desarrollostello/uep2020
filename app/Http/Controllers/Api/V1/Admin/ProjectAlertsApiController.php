<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectAlertRequest;
use App\Http\Requests\UpdateProjectAlertRequest;
use App\ProjectAlert;

class ProjectAlertsApiController extends Controller
{
    public function index()
    {
        $projectAlerts = ProjectAlert::all();

        return $projectAlerts;
    }

    public function store(StoreProjectAlertRequest $request)
    {
        return ProjectAlert::create($request->all());
    }

    public function update(UpdateProjectAlertRequest $request, ProjectAlert $projectAlert)
    {
        return $projectAlert->update($request->all());
    }

    public function show(ProjectAlert $projectAlert)
    {
        return $projectAlert;
    }

    public function destroy(ProjectAlert $projectAlert)
    {
        return $projectAlert->delete();
    }
}
