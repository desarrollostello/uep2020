<?php

namespace App\Http\Requests;

use App\LegalFigure;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyLegalFigureRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('figuralegal_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:legal_figures,id',
        ];
    }
}
