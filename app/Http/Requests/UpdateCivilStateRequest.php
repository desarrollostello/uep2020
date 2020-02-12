<?php

namespace App\Http\Requests;

use App\CivilState;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCivilStateRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('estadocivil_edit');
    }

    public function rules()
    {
        return [
            'name' => ['required',],
        ];
    }
}
