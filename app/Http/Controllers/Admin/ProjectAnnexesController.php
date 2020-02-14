<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectAnnexeRequest;
use App\Http\Requests\StoreProjectAnnexeRequest;
use App\Http\Requests\UpdateProjectAnnexeRequest;
use App\ProjectAnnexe;

class ProjectAnnexesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('anexoProyecto_access'), 403);
        $projectAnnexes = ProjectAnnexe::all();

        return view('admin.projectAnnexes.index', compact('projectAnnexes'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('anexoProyecto_create'), 403);
        return view('admin.projectAnnexes.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectAnnexeRequest $request)
    {
        abort_unless(\Gate::allows('anexoProyecto_create'), 403);
        $projectAnnexe = ProjectAnnexe::create($request->all());

        return redirect()->route('admin.projectAnnexe.index');
    }

    public function edit(ProjectAnnexe $projectAnnexe)
    {
        abort_unless(\Gate::allows('anexoProyecto_edit'), 403);
        return view('admin.projectAnnexes.ce', [
            'action' => 'edit',
            'projectAnnexe'=> $projectAnnexe
        ]);
    }

    public function update(UpdateProjectAnnexeRequest $request, ProjectAnnexe $projectAnnexe)
    {
        abort_unless(\Gate::allows('anexoProyecto_edit'), 403);

        $projectAnnexe->update($request->all());

        return redirect()->route('admin.projectAnnexe.index');
    }

    public function show(ProjectAnnexe $projectAnnexe)
    {
        abort_unless(\Gate::allows('anexoProyecto_show'), 403);

        return view('admin.projectAnnexes.show', compact('projectAnnexe'));
    }

    public function destroy(ProjectAnnexe $projectAnnexe)
    {
        abort_unless(\Gate::allows('alertaProyecto_delete'), 403);

        $projectAnnexe->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectAnnexeRequest $request)
    {
        ProjectAnnexe::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
