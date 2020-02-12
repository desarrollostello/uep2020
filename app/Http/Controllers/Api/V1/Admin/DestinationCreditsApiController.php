<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationCreditRequest;
use App\DestinationCredit;

class DestinationCreditsApiController extends Controller
{
    public function index()
    {
        $destinationCredit = DestinationCredit::all();

        return $destinationCredit;
    }

    public function store(DestinoCreditoRequest $request)
    {
        return DestinationCredit::create($request->all());
    }

    public function update(DestinoCreditoRequest $request, DestinationCredit $destinationCredit)
    {
        return $destinationCredit->update($request->all());
    }

    public function show(DestinationCredit $destinationCredit)
    {
        return $destinationCredit;
    }

    public function destroy(DestinationCredit $destinationCredit)
    {
        return $destinationCredit->delete();
    }
}
