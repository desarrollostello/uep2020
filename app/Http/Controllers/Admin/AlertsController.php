<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAlertRequest;
use App\Http\Requests\StoreAlertRequest;
use App\Http\Requests\UpdateAlertRequest;
use App\Alert;

class AlertsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('alerta_access'), 403);
        $alerts = Alert::all();

        return view('admin.alerts.index', compact('alerts'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('alerta_create'), 403);
        return view('admin.alerts.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreAlertRequest $request)
    {
        
        abort_unless(\Gate::allows('alerta_create'), 403);
        $alert = Alert::create($request->all());

        return redirect()->route('admin.alert.index');
    }

    public function edit(Alert $alert)
    {
        abort_unless(\Gate::allows('alerta_edit'), 403);
        return view('admin.alerts.ce', [
            'action' => 'edit',
            'alert'=> $alert
        ]);
    }

    public function update(UpdateAlertRequest $request, Alert $alert)
    {
        abort_unless(\Gate::allows('alerta_edit'), 403);

        $alert->update($request->all());

        return redirect()->route('admin.alert.index');
    }

    public function show(Alert $alert)
    {
        abort_unless(\Gate::allows('alerta_show'), 403);

        return view('admin.alerts.show', compact('alert'));
    }

    public function destroy(Alert $alert)
    {
        abort_unless(\Gate::allows('alerta_delete'), 403);

        $alert->delete();

        return back();
    }

    public function massDestroy(MassDestroyAlertRequest $request)
    {
        Sector::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
