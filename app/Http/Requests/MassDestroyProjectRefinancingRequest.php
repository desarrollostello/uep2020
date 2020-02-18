<?php

namespace App\Http\Requests;

use App\ProjectRefinancing;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProjectRefinancingRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('refinanciacionProyecto_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_refinancings,id',
        ];
    }
}
