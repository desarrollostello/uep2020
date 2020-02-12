<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeriodicityRequest;
use App\Periodicity;

class PeriodicitiesApiController extends Controller
{
    public function index()
    {
        $periodicities = Periodicity::all();

        return $periodicities;
    }

    public function store(PeriodicityRequest $request)
    {
        return Periodicity::create($request->all());
    }

    public function update(PeriodicityRequest $request, Periodicity $periodicity)
    {
        return $periodicity->update($request->all());
    }

    public function show(Periodicity $periodicity)
    {
        return $periodicity;
    }

    public function destroy(Periodicity $periodicity)
    {
        return $periodicity->delete();
    }
}
