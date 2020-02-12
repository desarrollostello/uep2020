@extends('layouts.admin')
@section('content')
<div class="card">
    <div style="width= 100%" class="card-header">
        {{ trans('uep.show') }} {{ trans('uep.lineasCredito.title_singular') }}
            <button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.name') }}
                    </th>
                    <td>
                        {{ $creditLine->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.description') }}
                    </th>
                    <td>
                        {{ $creditLine->description }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.maximum_amount') }}
                    </th>
                    <td>
                        {{ $creditLine->maximum_amount }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.maximum_grace') }}
                    </th>
                    <td>
                        {{ $creditLine->maximum_grace }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.maximum_amortization') }}
                    </th>
                    <td>
                        {{ $creditLine->maximum_amortization }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('uep.lineasCredito.fields.rate') }}
                    </th>
                    <td>
                        {{ $creditLine->rate }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection