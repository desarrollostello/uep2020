<?php

namespace App\Http\Requests;

use App\CivilState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCivilStateRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('estadocivil_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:civil_states,id',
        ];
    }
}
