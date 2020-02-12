<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlertRequest;
use App\Http\Requests\UpdateAlertRequest;
use App\Alert;

class AlertsApiController extends Controller
{
    public function index()
    {
        $alerts = Alert::all();

        return $alerts;
    }

    public function store(StoreAlertRequest $request)
    {
        return Alert::create($request->all());
    }

    public function update(UpdateAlertRequest $request, Alert $alert)
    {
        return $alert->update($request->all());
    }

    public function show(Alert $alert)
    {
        return $alert;
    }

    public function destroy(Alert $alert)
    {
        return $alert->delete();
    }
}
