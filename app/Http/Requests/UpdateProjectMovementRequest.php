<?php

namespace App\Http\Requests;

use App\ProjectMovement;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectMovementRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('movimientoProyecto_edit');
    }

    public function rules()
    {
        return [
            'user_id'       => ['nullable|exists:users,id'],
            'project_id'    => ['required|exists:projects,id'],
            'date'          => ['required|date'],
            'file'          => ['required'],
            'icon'          => ['nullable'],
            'description'   => ['required'],
        ];
    }

    public function messages()
     {
        return [
            'project_id.required' => 'Deberá Seleccionar un Proyecto para el Anexo',
            'date.required' => 'Deberá ingresar la fecha del anexo',
            'description.required' => 'La Descripción de la Línea de Créditos es obligatoria',
            'file.required' => 'Deberá enviar un anexo',
        ];
    }
}
