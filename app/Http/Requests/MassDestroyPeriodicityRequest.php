<?php

namespace App\Http\Requests;

use App\Periodicity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyPeriodicityRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('periodicidad_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:periodicities,id',
        ];
    }
}
