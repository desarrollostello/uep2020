<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyZoneRequest;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Zone;

class ZonesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('zona_access'), 403);
        $zones = Zone::all();

        return view('admin.zones.index', compact('zones'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('zona_create'), 403);
        return view('admin.zones.create');
    }

    public function store(StoreZoneRequest $request)
    {
        abort_unless(\Gate::allows('zona_create'), 403);
        $zone = Zone::create($request->all());

        return redirect()->route('admin.zone.index');
    }

    public function edit(Zone $zone)
    {
        abort_unless(\Gate::allows('zona_edit'), 403);
        return view('admin.zones.edit', compact('zone'));
    }

    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        abort_unless(\Gate::allows('zona_edit'), 403);

        $zone->update($request->all());

        return redirect()->route('admin.zone.index');
    }

    public function show(Zone $zone)
    {
        abort_unless(\Gate::allows('zona_show'), 403);

        return view('admin.zones.show', compact('zone'));
    }

    public function destroy(Zone $zone)
    {
        abort_unless(\Gate::allows('zona_delete'), 403);

        $zone->delete();

        return back();
    }

    public function massDestroy(MassDestroyZoneRequest $request)
    {
        Zone::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
