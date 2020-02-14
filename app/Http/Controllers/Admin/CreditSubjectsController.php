<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCreditSubjectRequest;
use App\Http\Requests\StoreCreditSubjectRequest;
use App\Http\Requests\UpdateCreditSubjectRequest;
use App\CreditSubject;

class CreditSubjectsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('sujetoCredito_access'), 403);
        $creditSubjects = CreditSubject::all();

        return view('admin.creditSubjects.index', compact('creditSubjects'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('sujetoCredito_create'), 403);
        return view('admin.creditSubjects.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreCreditSubjectRequest $request)
    {
        abort_unless(\Gate::allows('sujetoCredito_create'), 403);
        $creditSubject = CreditSubject::create($request->all());

        return redirect()->route('admin.creditSubject.index');
    }

    public function edit(CreditSubject $creditSubject)
    {
        abort_unless(\Gate::allows('sujetoCredito_edit'), 403);
        return view('admin.civilStates.ce', [
            'action' => 'edit',
            'creditSubject'=> $creditSubject
        ]);
    }

    public function update(UpdateCreditSubjectRequest $request, CreditSubject $creditSubject)
    {
        abort_unless(\Gate::allows('sujetoCredito_edit'), 403);

        $creditSubject->update($request->all());

        return redirect()->route('admin.creditSubject.index');
    }

    public function show(CreditSubject $creditSubject)
    {
        abort_unless(\Gate::allows('sujetoCredito_show'), 403);

        return view('admin.civilStates.show', compact('creditSubject'));
    }

    public function destroy(CreditSubject $creditSubject)
    {
        abort_unless(\Gate::allows('sujetoCredito_delete'), 403);

        $creditSubject->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreditSubjectRequest $request)
    {
        CreditSubject::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
