<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CivilStateRequest;
use App\CivilState;

class CivilStatesApiController extends Controller
{
    public function index()
    {
        $civilStates = CivilState::all();

        return $civilStates;
    }

    public function store(CivilStateRequest $request)
    {
        return CivilState::create($request->all());
    }

    public function update(CivilStateRequest $request, CivilState $civilState)
    {
        return $civilState->update($request->all());
    }

    public function show(CivilState $civilState)
    {
        return $civilState;
    }

    public function destroy(CivilState $civilState)
    {
        return $CivilState->delete();
    }
}
