<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyChecklistRequest;
use App\Http\Requests\StoreChecklistRequest;
use App\Http\Requests\UpdateChecklistRequest;
use App\Checklist;

class ChecklistsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('checklist_access'), 403);
        $checklists = Checklist::all();

        return view('admin.checklists.index', compact('checklists'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('checklist_create'), 403);
        return view('admin.checklists.ce', [
            'action' => 'create'
        ]);
    }

    public function store(StoreChecklistRequest $request)
    {
        
        abort_unless(\Gate::allows('checklist_create'), 403);
        $checklist = Checklist::create($request->all());

        return redirect()->route('admin.checklist.index');
    }

    public function edit(Checklist $checklist)
    {
        abort_unless(\Gate::allows('auditoria_edit'), 403);
        return view('admin.checklists.ce', [
            'action' => 'edit',
            'checklist'=> $checklist
        ]);
    }

    public function update(UpdateChecklistRequest $request, Checklist $checklist)
    {
        abort_unless(\Gate::allows('checklist_edit'), 403);

        $checklist->update($request->all());

        return redirect()->route('admin.checklist.index');
    }

    public function show(Checklist $checklist)
    {
        abort_unless(\Gate::allows('checklist_show'), 403);

        return view('admin.checklists.show', compact('checklist'));
    }

    public function destroy(Checklist $checklist)
    {
        abort_unless(\Gate::allows('checklist_delete'), 403);

        $checklist->delete();

        return back();
    }

    public function massDestroy(MassDestroyChecklistRequest $request)
    {
        Sector::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
