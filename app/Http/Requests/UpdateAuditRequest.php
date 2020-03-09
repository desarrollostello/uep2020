<?php

namespace App\Http\Requests;

use App\Audit;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAuditRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('auditoria_edit');
    }

    public function rules()
    {
        return [
            'model'         => ['required'],
            'date'          => ['required|date'],
            'previus_value' => ['required'],
            'user_id'       => ['nullable|exists:users,id'],
        ];
    }
    public function messages()
     {
        return [
            'model.required'           => 'El Modelo en la Auditoria es Obligatorio',
            'date.required'            => 'La Fecha en la Auditoria es obligatoria',
            'user_id.required'         => 'El Usuario en la Auditoria es obligatorio',
            'previus_value.required'   => 'El Valor Previo en la Auditoria es obligatorio',
        
        ];
    }
}
