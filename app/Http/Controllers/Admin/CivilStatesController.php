<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCivilStateRequest;
use App\Http\Requests\StoreCivilStateRequest;
use App\Http\Requests\UpdateCivilStateRequest;
use App\CivilState;

class CivilStatesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('estadoCivil_access'), 403);
        $civilStates = CivilState::all();

        return view('admin.civilStates.index', compact('civilStates'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('estadoCivil_create'), 403);
        return view('admin.civilStates.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreCivilStateRequest $request)
    {
        abort_unless(\Gate::allows('estadoCivil_create'), 403);
        $civilState = CivilState::create($request->all());

        return redirect()->route('admin.civilState.index');
    }

    public function edit(CivilState $civilState)
    {
        abort_unless(\Gate::allows('estadoCivil_edit'), 403);
        return view('admin.civilStates.ce', [
            'action' => 'edit',
            'civilState'=> $civilState
        ]);
    }

    public function update(UpdateCivilStateRequest $request, CivilState $civilState)
    {
        abort_unless(\Gate::allows('estadoCivil_edit'), 403);

        $civilState->update($request->all());

        return redirect()->route('admin.civilState.index');
    }

    public function show(CivilState $civilState)
    {
        abort_unless(\Gate::allows('estadoCivil_show'), 403);

        return view('admin.civilStates.show', compact('civilState'));
    }

    public function destroy(CivilState $civilState)
    {
        abort_unless(\Gate::allows('estadoCivil_delete'), 403);

        $civilState->delete();

        return back();
    }

    public function massDestroy(MassDestroyCivilStateRequest $request)
    {
        CivilState::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
