<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Location;

class LocationsApiController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return $locations;
    }

    public function store(StoreLocationRequest $request)
    {
        return Location::create($request->all());
    }

    public function update(UpdateLocationRequest $request, Location $location)
    {
        return $location->update($request->all());
    }

    public function show(Location $location)
    {
        return $location;
    }

    public function destroy(Location $location)
    {
        return $location->delete();
    }
}
