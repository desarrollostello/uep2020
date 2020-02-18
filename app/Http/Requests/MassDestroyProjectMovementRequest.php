<?php

namespace App\Http\Requests;

use App\ProjectMovement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProjectMovementRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('movimientoProyecto_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_movements,id',
        ];
    }
}
