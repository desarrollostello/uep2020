<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStateRequest;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;
use App\State;

class StatesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('estado_access'), 403);
        $states = State::all();

        return view('admin.states.index', compact('states'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('estado_create'), 403);
        return view('admin.states.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreStateRequest $request)
    {
        abort_unless(\Gate::allows('estado_create'), 403);
        $state = State::create($request->all());

        return redirect()->route('admin.state.index');
    }

    public function edit(State $state)
    {
        abort_unless(\Gate::allows('estado_edit'), 403);
        return view('admin.states.ce', [
            'action' => 'edit',
            'state'=> $state
        ]);
    }

    public function update(UpdateStateRequest $request, State $state)
    {
        abort_unless(\Gate::allows('estado_edit'), 403);

        $state->update($request->all());

        return redirect()->route('admin.state.index');
    }

    public function show(State $state)
    {
        abort_unless(\Gate::allows('estado_show'), 403);

        return view('admin.states.show', compact('state'));
    }

    public function destroy(State $state)
    {
        abort_unless(\Gate::allows('estado_delete'), 403);

        $state->delete();

        return back();
    }

    public function massDestroy(MassDestroyStateRequest $request)
    {
        State::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
