<?php

namespace App\Http\Requests;

use App\Zone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyZoneRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('zona_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:zones,id',
        ];
    }
}
