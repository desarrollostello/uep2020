<?php

namespace App\Http\Requests;

use App\Alert;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAlertRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('alerta_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:alerts,id',
        ];
    }
}
