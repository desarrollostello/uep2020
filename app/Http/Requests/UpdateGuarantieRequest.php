<?php

namespace App\Http\Requests;

use App\Guarantie;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGuarantieRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('garantia_edit');
    }

    public function rules()
    {
        return [
            'name' => ['required',],
        ];
    }
}
