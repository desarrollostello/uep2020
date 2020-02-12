<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LegalFigureRequest;
use App\LegalFigure;

class LegalFiguresApiController extends Controller
{
    public function index()
    {
        $legalFigures = LegalFigure::all();

        return $legalFigures;
    }

    public function store(LegalFigureRequest $request)
    {
        return LegalFigure::create($request->all());
    }

    public function update(LegalFigureRequest $request, LegalFigure $legalFigure)
    {
        return $legalFigure->update($request->all());
    }

    public function show(LegalFigure $legalFigure)
    {
        return $legalFigure;
    }

    public function destroy(LegalFigure $legalFigure)
    {
        return $legalFigure->delete();
    }
}
