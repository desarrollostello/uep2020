<?php

namespace App\Http\Requests;

use App\ProjectApplicant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProjectApplicantRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('solicitanteProyecto_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_applicants,id',
        ];
    }
}
