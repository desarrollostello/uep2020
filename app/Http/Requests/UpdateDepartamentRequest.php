<?php

namespace App\Http\Requests;

use App\Departament;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartamentRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('departament_edit');
    }

    public function rules()
    {
        return [
            'name' => ['required',],
        ];
    }
}
