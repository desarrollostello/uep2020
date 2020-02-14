<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreditSubjectRequest;
use App\Http\Requests\UpdateCreditSubjectRequest;
use App\CreditSubject;

class CreditSubjectsApiController extends Controller
{
    public function index()
    {
        $creditSubjects = CreditSubject::all();

        return $creditSubjects;
    }

    public function store(StoreCreditSubjectRequest $request)
    {
        return CreditSubject::create($request->all());
    }

    public function update(UpdateCreditSubjectRequest $request, CreditSubject $creditSubject)
    {
        return $creditSubject->update($request->all());
    }

    public function show(CreditSubject $creditSubject)
    {
        return $creditSubject;
    }

    public function destroy(CreditSubject $creditSubject)
    {
        return $creditSubject->delete();
    }
}
