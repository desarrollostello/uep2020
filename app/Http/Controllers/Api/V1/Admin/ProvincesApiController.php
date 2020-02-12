<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Province;

class ProvincesApiController extends Controller
{
    public function index()
    {
        $provinces = Province::all();

        return $provinces;
    }

    public function store(StoreProvinceRequest $request)
    {
        return Province::create($request->all());
    }

    public function update(UpdateProvinceRequest $request, Province $province)
    {
        return $province->update($request->all());
    }

    public function show(Province $province)
    {
        return $province;
    }

    public function destroy(Province $province)
    {
        return $province->delete();
    }
}
