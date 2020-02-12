<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankBranchesRequest;
use App\Http\Requests\UpdateBankBranchesRequest;
use App\BankBranche;

class BankBranchesApiController extends Controller
{
    public function index()
    {
        $bankBranche = BankBranche::all();

        return $bankBranches;
    }

    public function store(StoreBankBranchesRequest $request)
    {
        return BankBranche::create($request->all());
    }

    public function update(UpdateBankBranchesRequest $request, BankBranche $bankBranche)
    {
        return $bankBranche->update($request->all());
    }

    public function show(BankBranche $bankBranche)
    {
        return $bankBranche;
    }

    public function destroy(BankBranche $bankBranche)
    {
        return $bankBranche->delete();
    }
}
