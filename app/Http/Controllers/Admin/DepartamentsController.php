<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDepartamentRequest;
use App\Http\Requests\StoreDepartamentRequest;
use App\Http\Requests\UpdateDepartamentRequest;
use App\Departament;

class DepartamentsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('departamento_access'), 403);
        $departaments = Departament::all();

        return view('admin.departaments.index', compact('departaments'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('departamento_create'), 403);
        return view('admin.departaments.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreDepartamentRequest $request)
    {
        abort_unless(\Gate::allows('departamento_create'), 403);
        $departament = Departament::create($request->all());

        return redirect()->route('admin.departaments.index');
    }

    public function edit(Departament $departament)
    {
        abort_unless(\Gate::allows('departamento_edit'), 403);
        return view('admin.departaments.ce', [
            'action' => 'edit',
            'departament'=> $departament
        ]);
    }

    public function update(UpdateDepartamentRequest $request, Departament $departament)
    {
        abort_unless(\Gate::allows('departamento_edit'), 403);

        $departament->update($request->all());

        return redirect()->route('admin.departament.index');
    }

    public function show(Departament $departament)
    {
        abort_unless(\Gate::allows('departamento_show'), 403);

        return view('admin.departaments.show', compact('departament'));
    }

    public function destroy(Departament $departament)
    {
        abort_unless(\Gate::allows('departamento_delete'), 403);

        $departament->delete();

        return back();
    }

    public function massDestroy(MassDestroyDepartamentRequest $request)
    {
        Departament::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
