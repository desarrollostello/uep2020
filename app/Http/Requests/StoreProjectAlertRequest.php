<?php

namespace App\Http\Requests;

use App\ProjectAlert;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectAlertRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('alertaProyecto_create');
    }

    public function rules()
    {
        return [
            'project_id'        => ['required|exists:projects,id'],
        	'alert_id'          => ['required|exists:alerts,id'],
            'user_id'           => ['nullable|exists:users,id'],
        ];
    }

	public function messages()
     {
        return [
           
        ];
    }
}
