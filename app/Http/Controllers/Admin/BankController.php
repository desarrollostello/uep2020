<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBankRequest;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Bank;

class BanksController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('banco_access'), 403);
        $banks = Bank::all();

        return view('admin.banks.index', compact('banks'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('banco_create'), 403);
        return view('admin.banks.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreBankRequest $request)
    {
        abort_unless(\Gate::allows('banco_create'), 403);
        $bank = Bank::create($request->all());

        return redirect()->route('admin.banks.index');
    }

    public function edit(Bank $bank)
    {
        abort_unless(\Gate::allows('banco_edit'), 403);
        return view('admin.banks.ce', [
            'action' => 'edit',
            'bank'=> $bank
        ]);
    }

    public function update(UpdateBankRequest $request, Bank $bank)
    {
        abort_unless(\Gate::allows('banco_edit'), 403);

        $bank->update($request->all());

        return redirect()->route('admin.banks.index');
    }

    public function show(Bank $bank)
    {
        abort_unless(\Gate::allows('banco_show'), 403);

        return view('admin.banks.show', compact('bank'));
    }

    public function destroy(Bank $bank)
    {
        abort_unless(\Gate::allows('banco_delete'), 403);

        $bank->delete();

        return back();
    }

    public function massDestroy(MassDestroyBankRequest $request)
    {
        Bank::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
