<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDisbursementRequest;
use App\Http\Requests\UpdateDisbursementRequest;
use App\Disbursement;

class DisbursementsApiController extends Controller
{
    public function index()
    {
        $disbursements = Disbursement::all();

        return $disbursements;
    }

    public function store(StoreDisbursementRequest $request)
    {
        return Disbursement::create($request->all());
    }

    public function update(UpdateDisbursementRequest $request, Disbursement $disbursement)
    {
        return $disbursement->update($request->all());
    }

    public function show(Disbursement $disbursement)
    {
        return $disbursement;
    }

    public function destroy(Disbursement $disbursement)
    {
        return $disbursement->delete();
    }
}
