<?php

namespace App\Http\Requests;

use App\DestinationCredit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyDestinationCreditRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('destinocredito_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:destination_credits,id',
        ];
    }
}
