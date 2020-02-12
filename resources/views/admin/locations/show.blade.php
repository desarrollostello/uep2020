@extends('layouts.admin')
@section('content')

<div class="card">
    <div style="width= 100%" class="card-header">
        {{ trans('uep.show') }} {{ trans('uep.localidad.title_singular') }}
            <button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('uep.localidad.fields.name') }}
                    </th>
                    <td>
                        {{ $location->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.localidad.fields.province_id') }}
                    </th>
                    <td>
                        {{ $location->province->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.localidad.fields.dpto_id') }}
                    </th>
                    <td>
                        {{ $location->departament->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.localidad.fields.zone_id') }}
                    </th>
                    <td>
                        {{ $location->zone->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.localidad.fields.cp') }}
                    </th>
                    <td>
                        {{ $location->cp }}
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>
</div>

@endsection