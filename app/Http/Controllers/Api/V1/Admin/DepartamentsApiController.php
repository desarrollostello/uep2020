<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartamentRequest;
use App\Http\Requests\UpdateDepartamentRequest;
use App\Departament;

class DepartamentsApiController extends Controller
{
    public function index()
    {
        $departaments = Departament::all();

        return $departaments;
    }

    public function store(StoreDepartamentRequest $request)
    {
        return Departament::create($request->all());
    }

    public function update(UpdateDepartamentRequest $request, Departament $departament)
    {
        return $departament->update($request->all());
    }

    public function show(Departament $departament)
    {
        return $departament;
    }

    public function destroy(Departament $departament)
    {
        return $departament->delete();
    }
}
