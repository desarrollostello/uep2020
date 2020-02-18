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
            'project_id'        => ['required'],
        	'alert_id'          => ['required'],
        ];
    }

	public function messages()
     {
        return [
           
        ];
    }
}
