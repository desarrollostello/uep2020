<?php

namespace App\Http\Requests;

use App\Audit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAuditRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('auditoria_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:audits,id',
        ];
    }
}
