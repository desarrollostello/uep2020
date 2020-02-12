<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDestinationCreditRequest;
use App\Http\Requests\StoreDestinationCreditRequest;
use App\Http\Requests\UpdateDestinationCreditRequest;
use App\DestinationCredit;

class DestinationCreditController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('destinoCredito_access'), 403);
        $destinationCredit = DestinationCredit::all();

        return view('admin.destinationCredits.index', compact('destinationCredit'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('destinoCredito_create'), 403);
        return view('admin.destinationCredits.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreDestinationCreditRequest $request)
    {
        abort_unless(\Gate::allows('destinoCredito_create'), 403);
        $destinationCredit = DestinationCredit::create($request->all());

        return redirect()->route('admin.destinationCredit.index');
    }

    public function edit(DestinationCredit $destinationCredit)
    {
        abort_unless(\Gate::allows('destinoCredito_edit'), 403);
        return view('admin.destinationCredits.ce', [
            'action' => 'edit',
            'destinationCredit'=> $destinationCredit
        ]);
    }

    public function update(UpdateDestinationCreditRequest $request, DestinationCredit $destinationCredit)
    {
        abort_unless(\Gate::allows('destinoCredito_edit'), 403);

        $destinationCredit->update($request->all());

        return redirect()->route('admin.destinationCredit.index');
    }

    public function show(DestinationCredit $destinationCredit)
    {
        abort_unless(\Gate::allows('destinoCredito_show'), 403);

        return view('admin.destinationCredits.show', compact('destinationCredit'));
    }

    public function destroy(DestinationCredit $destinationCredit)
    {
        abort_unless(\Gate::allows('destinoCredito_delete'), 403);

        $destinationCredit->delete();

        return back();
    }

    public function massDestroy(MassDestroyDestinationCreditRequest $request)
    {
        DestinationCredit::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
