<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;
use App\State;

class StatesApiController extends Controller
{
    public function index()
    {
        $states = State::all();

        return $states;
    }

    public function store(StoreStateRequest $request)
    {
        return State::create($request->all());
    }

    public function update(UpdateStateRequest $request, State $state)
    {
        return $state->update($request->all());
    }

    public function show(State $state)
    {
        return $state;
    }

    public function destroy(State $state)
    {
        return $state->delete();
    }
}
