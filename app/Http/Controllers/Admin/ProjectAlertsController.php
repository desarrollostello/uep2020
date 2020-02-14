<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectAlertRequest;
use App\Http\Requests\StoreProjectAlertRequest;
use App\Http\Requests\UpdateProjectAlertRequest;
use App\ProjectAlert;

class ProjectAlertsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('alertaProyecto_access'), 403);
        $projectAlerts = ProjectAlert::all();

        return view('admin.projectAlerts.index', compact('projectAlerts'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('alertaProyecto_create'), 403);
        return view('admin.projectAlerts.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectAlertRequest $request)
    {
        abort_unless(\Gate::allows('alertaProyecto_create'), 403);
        $projectAlert = ProjectAlert::create($request->all());

        return redirect()->route('admin.projectAlert.index');
    }

    public function edit(ProjectAlert $projectAlert)
    {
        abort_unless(\Gate::allows('alertaProyecto_edit'), 403);
        return view('admin.projectAlerts.ce', [
            'action' => 'edit',
            'projectAlert'=> $projectAlert
        ]);
    }

    public function update(UpdateProjectAlertRequest $request, ProjectAlert $projectAlert)
    {
        abort_unless(\Gate::allows('alertaProyecto_edit'), 403);

        $projectAlert->update($request->all());

        return redirect()->route('admin.projectAlert.index');
    }

    public function show(ProjectAlert $projectAlert)
    {
        abort_unless(\Gate::allows('alertaProyecto_show'), 403);

        return view('admin.projectAlerts.show', compact('projectAlert'));
    }

    public function destroy(ProjectAlert $projectAlert)
    {
        abort_unless(\Gate::allows('alertaProyecto_delete'), 403);

        $projectAlert->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectAlertRequest $request)
    {
        ProjectAlert::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
