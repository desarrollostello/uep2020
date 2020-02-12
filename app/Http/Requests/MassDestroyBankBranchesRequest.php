<?php

namespace App\Http\Requests;

use App\BankBranche;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyBankBranchesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('sucursalBanco_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sucursal_bancos,id',
        ];
    }
}
