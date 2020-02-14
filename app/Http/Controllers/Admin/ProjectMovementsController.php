<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectMovementRequest;
use App\Http\Requests\StoreProjectMovementRequest;
use App\Http\Requests\UpdateProjectMovementRequest;
use App\ProjectMovement;

class ProjectMovementsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('movimientoProyecto_access'), 403);
        $projectMovements = ProjectMovement::all();

        return view('admin.projectMovements.index', compact('projectMovements'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('movimientoProyecto_create'), 403);
        return view('admin.projectMovements.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreProjectMovementRequest $request)
    {
        abort_unless(\Gate::allows('movimientoProyecto_create'), 403);
        $projectMovement = ProjectMovement::create($request->all());

        return redirect()->route('admin.projectMovement.index');
    }

    public function edit(ProjectMovement $projectMovement)
    {
        abort_unless(\Gate::allows('movimientoProyecto_edit'), 403);
        return view('admin.projectMovements.ce', [
            'action' => 'edit',
            'projectMovement'=> $projectMovement
        ]);
    }

    public function update(UpdateProjectMovementRequest $request, ProjectMovement $projectMovement)
    {
        abort_unless(\Gate::allows('movimientoProyecto_edit'), 403);

        $projectMovement->update($request->all());

        return redirect()->route('admin.projectMovement.index');
    }

    public function show(ProjectMovement $projectMovement)
    {
        abort_unless(\Gate::allows('movimientoProyecto_show'), 403);

        return view('admin.projectMovements.show', compact('projectMovement'));
    }

    public function destroy(ProjectMovement $projectMovement)
    {
        abort_unless(\Gate::allows('movimientoProyecto_delete'), 403);

        $projectMovement->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectMovementRequest $request)
    {
        ProjectMovement::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
