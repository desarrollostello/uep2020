<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRefinancingRequest;
use App\Http\Requests\UpdateProjectRefinancingRequest;
use App\ProjectMovement;

class ProjectRefinancingsApiController extends Controller
{
    public function index()
    {
        $projectRefinancings = ProjectRefinancing::all();

        return $projectRefinancings;
    }

    public function store(StoreProjectRefinancingRequest $request)
    {
        return ProjectRefinancing::create($request->all());
    }

    public function update(UpdateProjectRefinancingRequest $request, ProjectRefinancing $projectRefinancing)
    {
        return $projectRefinancing->update($request->all());
    }

    public function show(ProjectRefinancing $projectRefinancing)
    {
        return $projectRefinancing;
    }

    public function destroy(ProjectRefinancing $projecRefinancing)
    {
        return $projectRefinancing->delete();
    }
}
