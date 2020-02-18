<?php

namespace App\Http\Requests;

use App\CreditSubject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCreditSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('sujetoCredito_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:credit_subjects,id',
        ];
    }
}
