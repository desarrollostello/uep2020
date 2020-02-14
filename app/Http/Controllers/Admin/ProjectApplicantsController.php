<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectApplicantRequest;
use App\Http\Requests\StoreProjectApplicantRequest;
use App\Http\Requests\UpdateProjectApplicantRequest;
use App\ProjectApplicant;

class ProjectAnnexesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('solicitanteProyecto_access'), 403);
        $projectApplicants = ProjectApplicant::all();

        return view('admin.projectApplicants.index', compact('projectApplicants'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('solicitanteProyecto_create'), 403);
        return view('admin.projectApplicants.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectApplicantRequest $request)
    {
        abort_unless(\Gate::allows('solicitanteProyecto_create'), 403);
        $projectApplicant = ProjectApplicant::create($request->all());

        return redirect()->route('admin.projectApplicant.index');
    }

    public function edit(ProjectApplicant $projectApplicant)
    {
        abort_unless(\Gate::allows('anexoProyecto_edit'), 403);
        return view('admin.projectApplicants.ce', [
            'action' => 'edit',
            'projectApplicant'=> $projectApplicant
        ]);
    }

    public function update(UpdateProjectAnnexeRequest $request, ProjectApplicant $projectApplicant)
    {
        abort_unless(\Gate::allows('solicitanteProyecto_edit'), 403);

        $projectApplicant->update($request->all());

        return redirect()->route('admin.projectApplicant.index');
    }

    public function show(ProjectApplicant $projectApplicant)
    {
        abort_unless(\Gate::allows('solicitanteProyecto_show'), 403);

        return view('admin.projectApplicants.show', compact('projectApplicant'));
    }

    public function destroy(ProjectApplicant $projectApplicant)
    {
        abort_unless(\Gate::allows('solicitanteProyecto_delete'), 403);

        $projectApplicant->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectApplicantRequest $request)
    {
        ProjectApplicant::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
