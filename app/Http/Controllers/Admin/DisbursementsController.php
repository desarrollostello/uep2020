<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDisbursementRequest;
use App\Http\Requests\StoreDisbursementRequest;
use App\Http\Requests\UpdateDisbursementRequest;
use App\Disbursement;

class DisbursementsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('desembolso_access'), 403);
        $disbursements = Disbursement::all();

        return view('admin.banks.index', compact('disbursements'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('desembolso_create'), 403);
        return view('admin.disbursements.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreDisbursementRequest $request)
    {
        abort_unless(\Gate::allows('desembolso_create'), 403);
        $disbursement = Disbursement::create($request->all());

        return redirect()->route('admin.disbursement.index');
    }

    public function edit(Disbursement $disbursement)
    {
        abort_unless(\Gate::allows('desembolso_edit'), 403);
        return view('admin.disbursements.ce', [
            'action' => 'edit',
            'disbursement'=> $disbursement
        ]);
    }

    public function update(UpdateDisbursementRequest $request, Disbursement $disbursement)
    {
        abort_unless(\Gate::allows('desembolso_edit'), 403);

        $disbursement->update($request->all());

        return redirect()->route('admin.disbursements.index');
    }

    public function show(Disbursement $disbursement)
    {
        abort_unless(\Gate::allows('desembolso_show'), 403);

        return view('admin.disbursements.show', compact('disbursement'));
    }

    public function destroy(Disbursement $disbursement)
    {
        abort_unless(\Gate::allows('desembolso_delete'), 403);

        $disbursement->delete();

        return back();
    }

    public function massDestroy(MassDestroyDisbursementRequest $request)
    {
        Disbursement::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
