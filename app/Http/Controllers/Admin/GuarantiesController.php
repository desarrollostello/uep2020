<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGuarantieRequest;
use App\Http\Requests\StoreGuarantieRequest;
use App\Http\Requests\UpdateGuarantieRequest;
use App\Guarantie;

class GuarantiesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('garantia_access'), 403);
        $guaranties = Guarantie::all();

        return view('admin.guaranties.index', compact('guaranties'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('garantia_create'), 403);
        return view('admin.guaranties.create');
    }

    public function store(StoreGuarantieRequest $request)
    {
        abort_unless(\Gate::allows('garantia_create'), 403);
        $guarantie = Guarantie::create($request->all());

        return redirect()->route('admin.guarantie.index');
    }

    public function edit(Guarantie $guarantie)
    {
        abort_unless(\Gate::allows('garantia_edit'), 403);
        return view('admin.guaranties.edit', compact('guarantie'));
    }

    public function update(UpdateGuarantieRequest $request, Guarantie $guarantie)
    {
        abort_unless(\Gate::allows('garantia_edit'), 403);

        $guarantie->update($request->all());

        return redirect()->route('admin.guarantie.index');
    }

    public function show(Guarantie $guarantie)
    {
        abort_unless(\Gate::allows('garantia_show'), 403);

        return view('admin.guaranties.show', compact('guarantie'));
    }

    public function destroy(Guarantie $guarantie)
    {
        abort_unless(\Gate::allows('garantia_delete'), 403);

        $guarantie->delete();

        return back();
    }

    public function massDestroy(MassDestroyGuarantieRequest $request)
    {
        Guarantie::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
