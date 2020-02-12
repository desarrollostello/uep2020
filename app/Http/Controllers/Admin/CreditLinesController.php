<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCreditLineRequest;
use App\Http\Requests\StoreCreditLineRequest;
use App\Http\Requests\UpdateCreditLineRequest;
use App\CreditLine;

class CreditLinesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('lineasCredito_access'), 403);
        $creditLines = CreditLine::all();

        return view('admin.creditLines.index', compact('creditLines'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('lineasCredito_create'), 403);
        return view('admin.creditLines.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreCreditLineRequest $request)
    {
        abort_unless(\Gate::allows('lineasCredito_create'), 403);
        $creditLine = CreditLine::create($request->all());

        return redirect()->route('admin.creditLine.index');
    }

    public function edit(CreditLine $creditLine)
    {
        abort_unless(\Gate::allows('lineasCredito_edit'), 403);
        return view('admin.creditLines.ce', [
            'action' => 'edit',
            'creditLine'=> $creditLine
        ]);
    }

    public function update(UpdateCreditLineRequest $request, CreditLine $creditLine)
    {
        abort_unless(\Gate::allows('lineasCredito_edit'), 403);

        $creditLine->update($request->all());

        return redirect()->route('admin.creditLine.index');
    }

    public function show(CreditLine $creditLine)
    {
        abort_unless(\Gate::allows('lineasCredito_show'), 403);

        return view('admin.creditLines.show', compact('creditLine'));
    }

    public function destroy(CreditLine $creditLine)
    {
        abort_unless(\Gate::allows('lineasCredito_delete'), 403);

        $creditLine->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreditLineRequest $request)
    {
        CreditLine::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
