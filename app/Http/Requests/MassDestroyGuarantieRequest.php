<?php

namespace App\Http\Requests;

use App\Guarantie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyGuarantieRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('garantia_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:guaranties,id',
        ];
    }
}
