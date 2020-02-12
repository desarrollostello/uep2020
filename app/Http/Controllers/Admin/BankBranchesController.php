<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBankBranchesRequest;
use App\Http\Requests\StoreBankBranchesRequest;
use App\Http\Requests\UpdateBankBranchesRequest;
use App\BankBranche;

class BankBranchesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('sucursalBanco_access'), 403);
        $bankBranches = BankBranche::all();

        return view('admin.bankBranches.index', compact('bankBranches'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('sucursalBanco_create'), 403);
        return view('admin.bankBranches.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreBankBranchesRequest $request)
    {
        
        abort_unless(\Gate::allows('sucursalBanco_create'), 403);
        $bankBranche = BankBranche::create($request->all());

        return redirect()->route('admin.bankBranche.index');
    }

    public function edit(BankBranche $bankBranche)
    {
        abort_unless(\Gate::allows('sucursalBanco_edit'), 403);
        return view('admin.locations.ce', [
            'action' => 'edit',
            'bankBranche'=> $bankBranche
        ]);
    }

    public function update(UpdateBankBranchesRequest $request, BankBranche $bankBranche)
    {
        abort_unless(\Gate::allows('sucursalBanco_edit'), 403);

        $bankBranche->update($request->all());

        return redirect()->route('admin.bankBranche.index');
    }

    public function show(BankBranche $bankBranche)
    {
        abort_unless(\Gate::allows('sucursalBanco_show'), 403);

        return view('admin.bankBranches.show', compact('bankBranche'));
    }

    public function destroy(BankBranche $bankBranche)
    {
        abort_unless(\Gate::allows('sucursalBanco_delete'), 403);
        $bankBranche->delete();
        return back();
    }

    public function massDestroy(MassDestroyBankBrancheRequest $request)
    {
        BankBranche::whereIn('id', request('ids'))->delete();
        return response(null, 204);
    }
}
