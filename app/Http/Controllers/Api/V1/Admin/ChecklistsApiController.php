<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistRequest;
use App\Http\Requests\UpdateChecklistRequest;
use App\Checklist;

class ChecklistsApiController extends Controller
{
    public function index()
    {
        $checklists = Checklist::all();

        return $checklists;
    }

    public function store(StoreChecklistRequest $request)
    {
        return Checklist::create($request->all());
    }

    public function update(UpdateChecklistRequest $request, Checklist $checklist)
    {
        return $checklist->update($request->all());
    }

    public function show(Checklist $checklist)
    {
        return $checklist;
    }

    public function destroy(Checklist $checklist)
    {
        return $checklist->delete();
    }
}
