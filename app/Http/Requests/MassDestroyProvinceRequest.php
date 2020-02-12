<?php

namespace App\Http\Requests;

use App\Province;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProvinceRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('provincia_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:provinces,id',
        ];
    }
}
