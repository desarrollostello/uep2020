<?php

namespace App\Http\Requests;

use App\Checklist;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyChecklistRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('checklist_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:checklists,id',
        ];
    }
}
