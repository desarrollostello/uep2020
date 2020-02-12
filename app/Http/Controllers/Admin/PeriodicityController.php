<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPeriodicityRequest;
use App\Http\Requests\StorePeriodicityRequest;
use App\Http\Requests\UpdatePeriodicityRequest;
use App\Periodicity;

class PeriodicityController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('periodicidad_access'), 403);
        $periodicities = Periodicity::all();

        return view('admin.periodicities.index', compact('periodicities'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('periodicidad_create'), 403);
        return view('admin.periodicities.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StorePeriodicityRequest $request)
    {
        abort_unless(\Gate::allows('periodicidad_create'), 403);
        $periodicity = Periodicity::create($request->all());

        return redirect()->route('admin.periodicity.index');
    }

    public function edit(Periodicity $periodicity)
    {
        abort_unless(\Gate::allows('periodicidad_edit'), 403);
        return view('admin.periodicities.ce', [
            'action' => 'edit',
            'periodicity'=> $periodicity
        ]);
    }

    public function update(UpdatePeriodicityRequest $request, Periodicity $periodicity)
    {
        abort_unless(\Gate::allows('periodicidad_edit'), 403);

        $periodicity->update($request->all());

        return redirect()->route('admin.periodicity.index');
    }

    public function show(Periodicity $periodicity)
    {
        abort_unless(\Gate::allows('periodicidad_show'), 403);

        return view('admin.periodicities.show', compact('periodicity'));
    }

    public function destroy(Periodicity $periodicity)
    {
        abort_unless(\Gate::allows('periodicidad_delete'), 403);

        $periodicity->delete();

        return back();
    }

    public function massDestroy(MassDestroyPeriodicityRequest $request)
    {
        Periodicity::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
