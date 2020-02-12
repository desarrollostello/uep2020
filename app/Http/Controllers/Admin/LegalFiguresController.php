<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLegalFigureRequest;
use App\Http\Requests\StoreLegalFigureRequest;
use App\Http\Requests\UpdateLegalFigureRequest;
use App\LegalFigure;

class LegalFiguresController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('figuraLegal_access'), 403);
        $legalFigures = LegalFigure::all();

        return view('admin.legalFigures.index', compact('legalFigures'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('figuraLegal_create'), 403);
        return view('admin.legalFigures.ce', [
            'action' => 'create'
        ]);;
    }

    public function store(StoreLegalFigureRequest $request)
    {
        abort_unless(\Gate::allows('figuraLegal_create'), 403);
        $legalFigure = LegalFigure::create($request->all());

        return redirect()->route('admin.legalFigure.index');
    }

    public function edit(LegalFigure $legalFigure)
    {
        abort_unless(\Gate::allows('figuraLegal_edit'), 403);
        return view('admin.legalFigures.ce', [
            'action' => 'edit',
            'legalFigure'=> $legalFigure
        ]);
    }

    public function update(UpdateLegalFigureRequest $request, LegalFigure $legalFigure)
    {
        abort_unless(\Gate::allows('figuraLegal_edit'), 403);

        $legalFigure->update($request->all());

        return redirect()->route('admin.legalFigure.index');
    }

    public function show(LegalFigure $legalFigure)
    {
        abort_unless(\Gate::allows('figuraLegal_show'), 403);

        return view('admin.legalFigures.show', compact('legalFigure'));
    }

    public function destroy(LegalFigure $legalFigure)
    {
        abort_unless(\Gate::allows('figuraLegal_delete'), 403);

        $legalFigure->delete();

        return back();
    }

    public function massDestroy(MassDestroyLegalFigureRequest $request)
    {
        LegalFigure::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
