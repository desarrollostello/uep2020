@extends('layouts.admin')
@section('content')
<div class="card">
    <div style="width= 100%" class="card-header">
        {{ trans('uep.show') }} {{ trans('uep.departamento.title_singular') }}
            <button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('uep.departamento.fields.name') }}
                    </th>
                    <td>
                        {{ $departament->name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection