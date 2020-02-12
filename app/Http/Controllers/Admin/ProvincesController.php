<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProvinceRequest;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Province;

class ProvincesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('provincia_access'), 403);
        $provinces = Province::all();

        return view('admin.provinces.index', compact('provinces'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('provincia_create'), 403);
        return view('admin.provinces.create');
    }

    public function store(StoreProvinceRequest $request)
    {
        abort_unless(\Gate::allows('provincia_create'), 403);
        $province = Province::create($request->all());

        return redirect()->route('admin.provinces.index');
    }

    public function edit(Province $province)
    {
        abort_unless(\Gate::allows('provincia_edit'), 403);
        return view('admin.provinces.edit', compact('province'));
    }

    public function update(UpdateProvinceRequest $request, Province $province)
    {
        abort_unless(\Gate::allows('provincia_edit'), 403);

        $province->update($request->all());

        return redirect()->route('admin.province.index');
    }

    public function show(Province $province)
    {
        abort_unless(\Gate::allows('provincia_show'), 403);

        return view('admin.provinces.show', compact('province'));
    }

    public function destroy(Province $province)
    {
        abort_unless(\Gate::allows('provincia_delete'), 403);

        $province->delete();

        return back();
    }

    public function massDestroy(MassDestroyProvinceRequest $request)
    {
        Province::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
