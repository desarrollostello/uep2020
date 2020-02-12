<?php

namespace App\Http\Requests;

use App\State;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyStateRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('estado_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:states,id',
        ];
    }
}
