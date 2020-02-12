<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreditLineRequest;
use App\Http\Requests\UpdateCreditLineRequest;
use App\CreditLine;

class CreditLinesApiController extends Controller
{
    public function index()
    {
        $creditLine = CreditLine::all();

        return $creditLine;
    }

    public function store(StoreCreditLineRequest $request)
    {
        return CreditLine::create($request->all());
    }

    public function update(UpdateCreditLineRequest $request, CreditLine $creditLine)
    {
        return $creditLine->update($request->all());
    }

    public function show(CreditLine $creditLine)
    {
        return $creditLine;
    }

    public function destroy(CreditLine $creditLine)
    {
        return $creditLine->delete();
    }
}
