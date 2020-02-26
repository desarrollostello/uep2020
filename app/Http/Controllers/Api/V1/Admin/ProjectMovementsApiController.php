<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectMovementRequest;
use App\Http\Requests\UpdateProjectMovementRequest;
use App\ProjectMovement;

class ProjectMovementsApiController extends Controller
{
    public function index()
    {
        $projectMovements = ProjectMovement::all();

        return $projectMovements;
    }

    public function store(StoreProjectMovementRequest $request)
    {
        return ProjectMovement::create($request->all());
    }

    public function update(UpdateProjectMovementRequest $request, ProjectMovement $projectMovement)
    {
        return $projectMovement->update($request->all());
    }

    public function show(ProjectMovement $projectMovement)
    {
        return $projectMovement;
    }

    public function destroy(ProjectMovement $projectMovement)
    {
        return $projectMovement->delete();
    }
}
