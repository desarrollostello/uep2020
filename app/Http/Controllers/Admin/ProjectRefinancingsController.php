<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectRefinancingRequest;
use App\Http\Requests\StoreProjectRefinancingRequest;
use App\Http\Requests\UpdateProjectRefinancingRequest;
use App\ProjectRefinancing;

class ProjectAnnexesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_access'), 403);
        $projectRefinancings = ProjectRefinancing::all();

        return view('admin.ProjectRefinancings.index', compact('projectRefinancings'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_create'), 403);
        return view('admin.projectRefinancings.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectRefinancingRequest $request)
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_create'), 403);
        $projectRefinancing = ProjectRefinancing::create($request->all());

        return redirect()->route('admin.projectRefinancing.index');
    }

    public function edit(ProjectRefinancing $projectRefinancing)
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_edit'), 403);
        return view('admin.projectRefinancings.ce', [
            'action' => 'edit',
            'projectRefinancing'=> $projectRefinancing
        ]);
    }

    public function update(UpdateProjectRefinancingRequest $request, ProjectRefinancing $projectRefinancing)
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_edit'), 403);

        $projectRefinancing->update($request->all());

        return redirect()->route('admin.projectRefinancing.index');
    }

    public function show(ProjectRefinancing $projectRefinancing)
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_show'), 403);

        return view('admin.projectRefinancings.show', compact('projectRefinancing'));
    }

    public function destroy(ProjectRefinancing $projectRefinancing)
    {
        abort_unless(\Gate::allows('refinanciacionProyecto_delete'), 403);

        $projectRefinancing->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectRefinancingRequest $request)
    {
        ProjectRefinancing::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
