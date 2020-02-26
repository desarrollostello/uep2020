<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Project;

class LocationsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('proyecto_access'), 403);
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('proyecto_create'), 403);
        return view('admin.projects.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectRequest $request)
    {
        
        abort_unless(\Gate::allows('proyecto_create'), 403);
        $project = Project::create($request->all());

        return redirect()->route('admin.project.index');
    }

    public function edit(Project $project)
    {
        abort_unless(\Gate::allows('proyecto_edit'), 403);
        return view('admin.projects.ce', [
            'action' => 'edit',
            'project'=> $project
        ]);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        abort_unless(\Gate::allows('proyecto_edit'), 403);

        $project->update($request->all());

        return redirect()->route('admin.project.index');
    }

    public function show(Project $project)
    {
        abort_unless(\Gate::allows('proyecto_show'), 403);

        return view('admin.projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        abort_unless(\Gate::allows('proyecto_delete'), 403);
        $project->delete();
        return back();
    }

    public function massDestroy(MassDestroyProjectRequest $request)
    {
        Project::whereIn('id', request('ids'))->delete();
        return response(null, 204);
    }
}
