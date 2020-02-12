<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuarantieRequest;
use App\Http\Requests\UpdateGuarantieRequest;
use App\Guarantie;

class GuarantiesApiController extends Controller
{
    public function index()
    {
        $guaranties = Guarantie::all();

        return $guaranties;
    }

    public function store(StoreGuarantieRequest $request)
    {
        return Guarantie::create($request->all());
    }

    public function update(UpdateGuarantieRequest $request, Guarantie $guarantie)
    {
        return $guarantie->update($request->all());
    }

    public function show(Guarantie $guarantie)
    {
        return $guarantie;
    }

    public function destroy(Guarantie $guarantie)
    {
        return $guarantie->delete();
    }
}
