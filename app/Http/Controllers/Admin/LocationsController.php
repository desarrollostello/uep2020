<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLocationRequest;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Location;

class LocationsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('localidad_access'), 403);
        $locations = Location::all();

        return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('localidad_create'), 403);
        return view('admin.locations.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreLocationRequest $request)
    {
        
        abort_unless(\Gate::allows('localidad_create'), 403);
        $location = Location::create($request->all());

        return redirect()->route('admin.location.index');
    }

    public function edit(Location $location)
    {
        abort_unless(\Gate::allows('localidad_edit'), 403);
        return view('admin.locations.ce', [
            'action' => 'edit',
            'location'=> $location
        ]);
    }

    public function update(UpdateLocationRequest $request, Location $location)
    {
        abort_unless(\Gate::allows('localidad_edit'), 403);

        $localidad->update($request->all());

        return redirect()->route('admin.location.index');
    }

    public function show(Location $location)
    {
        abort_unless(\Gate::allows('localidad_show'), 403);

        return view('admin.locations.show', compact('location'));
    }

    public function destroy(Location $location)
    {
        abort_unless(\Gate::allows('localidad_delete'), 403);
        $location->delete();
        return back();
    }

    public function massDestroy(MassDestroyLocationRequest $request)
    {
        Location::whereIn('id', request('ids'))->delete();
        return response(null, 204);
    }
}
