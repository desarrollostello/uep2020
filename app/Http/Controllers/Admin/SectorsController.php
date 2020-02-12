<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySectorRequest;
use App\Http\Requests\StoreSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use App\Sector;

class SectorsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('sector_access'), 403);
        $sectors = Sector::all();

        return view('admin.sectors.index', compact('sectors'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('sector_create'), 403);
        return view('admin.sectors.create');
    }

    public function store(StoreSectorRequest $request)
    {
        abort_unless(\Gate::allows('sector_create'), 403);
        $sector = Sector::create($request->all());

        return redirect()->route('admin.sector.index');
    }

    public function edit(Sector $sector)
    {
        abort_unless(\Gate::allows('sector_edit'), 403);
        return view('admin.sectors.edit', compact('sector'));
    }

    public function update(UpdateSectorRequest $request, Sector $sector)
    {
        abort_unless(\Gate::allows('sector_edit'), 403);

        $sector->update($request->all());

        return redirect()->route('admin.sector.index');
    }

    public function show(Sector $sector)
    {
        abort_unless(\Gate::allows('sector_show'), 403);

        return view('admin.sectors.show', compact('sector'));
    }

    public function destroy(Sector $sector)
    {
        abort_unless(\Gate::allows('sector_delete'), 403);

        $sector->delete();

        return back();
    }

    public function massDestroy(MassDestroySectorRequest $request)
    {
        Sector::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
