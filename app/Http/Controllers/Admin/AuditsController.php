<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAuditRequest;
use App\Http\Requests\StoreAuditRequest;
use App\Http\Requests\UpdateAuditRequest;
use App\Audits;

class AuditsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('auditoria_access'), 403);
        $audits = Audit::all();

        return view('admin.audits.index', compact('audits'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('auditoria_create'), 403);
        return view('admin.audits.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreAuditRequest $request)
    {
        
        abort_unless(\Gate::allows('auditoria_create'), 403);
        $audit = Audit::create($request->all());

        return redirect()->route('admin.audit.index');
    }

    public function edit(Audit $audit)
    {
        abort_unless(\Gate::allows('auditoria_edit'), 403);
        return view('admin.audits.ce', [
            'action' => 'edit',
            'audit'=> $audit
        ]);
    }

    public function update(UpdateAuditRequest $request, Audit $audit)
    {
        abort_unless(\Gate::allows('auditoria_edit'), 403);

        $audit->update($request->all());

        return redirect()->route('admin.audit.index');
    }

    public function show(Audit $audit)
    {
        abort_unless(\Gate::allows('auditoria_show'), 403);

        return view('admin.audits.show', compact('audit'));
    }

    public function destroy(Audit $audit)
    {
        abort_unless(\Gate::allows('auditoria_delete'), 403);

        $audit->delete();

        return back();
    }

    public function massDestroy(MassDestroyAuditRequest $request)
    {
        Sector::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
