<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Bank;

class BanksApiController extends Controller
{
    public function index()
    {
        $banks = Bank::all();

        return $banks;
    }

    public function store(StoreBankRequest $request)
    {
        return Bank::create($request->all());
    }

    public function update(UpdateBankRequest $request, Bank $bank)
    {
        return $bank->update($request->all());
    }

    public function show(Bank $bank)
    {
        return $bank;
    }

    public function destroy(Bank $bank)
    {
        return $bank->delete();
    }
}
