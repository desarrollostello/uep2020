<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectAnnexeRequest;
use App\Http\Requests\UpdateProjectAnnexeRequest;
use App\ProjectAnnexe;

class ProjectAnnexesApiController extends Controller
{
    public function index()
    {
        $projectAnnexes = ProjectAnnexe::all();

        return $projectAnnexes;
    }

    public function store(StoreProjectAnnexeRequest $request)
    {
        return ProjectAnnexe::create($request->all());
    }

    public function update(UpdateProjectAnnexeRequest $request, ProjectAnnexe $projectAnnexe)
    {
        return $projectAnnexe->update($request->all());
    }

    public function show(ProjectAnnexe $projectAnnexe)
    {
        return $projectAnnexe;
    }

    public function destroy(ProjectAnnexe $projectAnnexe)
    {
        return $projectAnnexe->delete();
    }
}
