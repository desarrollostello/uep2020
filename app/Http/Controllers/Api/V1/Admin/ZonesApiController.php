<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Zone;

class ZonesApiController extends Controller
{
    public function index()
    {
        $zones = Zone::all();

        return $zones;
    }

    public function store(StoreZoneRequest $request)
    {
        return Zone::create($request->all());
    }

    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        return $zone->update($request->all());
    }

    public function show(Zone $zone)
    {
        return $zone;
    }

    public function destroy(Zone $zone)
    {
        return $zone->delete();
    }
}
