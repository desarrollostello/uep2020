<?php

namespace App\Http\Requests;

use App\ProjectAnnexe;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProjectAnnexeRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('anexoProyecto_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_annexes,id',
        ];
    }
}
