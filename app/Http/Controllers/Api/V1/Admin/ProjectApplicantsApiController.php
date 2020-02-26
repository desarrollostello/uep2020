<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectApplicantRequest;
use App\Http\Requests\UpdateProjectApplicantRequest;
use App\ProjectApplicant;

class ProjectApplicantsApiController extends Controller
{
    public function index()
    {
        $projectApplicants = ProjectApplicant::all();

        return $projectApplicants;
    }

    public function store(StoreProjectApplicantRequest $request)
    {
        return ProjectApplicant::create($request->all());
    }

    public function update(UpdateProjectApplicantRequest $request, ProjectApplicant $projectApplicant)
    {
        return $projectApplicant->update($request->all());
    }

    public function show(ProjectApplicant $projectApplicant)
    {
        return $projectApplicant;
    }

    public function destroy(ProjectApplicant $projectApplicant)
    {
        return $projectApplicant->delete();
    }
}
