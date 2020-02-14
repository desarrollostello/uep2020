<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuditRequest;
use App\Http\Requests\UpdateAuditRequest;
use App\Audit;

class AuditsApiController extends Controller
{
    public function index()
    {
        $audits = Audit::all();

        return $audits;
    }

    public function store(StoreAuditRequest $request)
    {
        return Audit::create($request->all());
    }

    public function update(UpdateAuditRequest $request, Audit $audit)
    {
        return $audit->update($request->all());
    }

    public function show(Audit $audit)
    {
        return $audit;
    }

    public function destroy(Audit $audit)
    {
        return $audit->delete();
    }
}
