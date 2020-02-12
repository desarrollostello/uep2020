@extends('layouts.admin')
@section('content')

<div class="card">
    <div style="width= 100%" class="card-header">
        {{ trans('uep.show') }} {{ trans('uep.alerta.title_singular') }}
            <button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.name') }}
                    </th>
                    <td>
                        {{ $alert->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.state') }}
                    </th>
                    <td>
                        {{ $alert->state }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.cod') }}
                    </th>
                    <td>
                        {{ $alert->cod }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.color') }}
                    </th>
                    <td>
                        {{ $alert->color }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.sql') }}
                    </th>
                    <td>
                        {{ $alert->sql }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.message') }}
                    </th>
                    <td>
                        {{ $alert->message }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.alerta.fields.days') }}
                    </th>
                    <td>
                        {{ $alert->days }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection