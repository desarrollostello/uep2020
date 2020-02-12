<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th class="text-center">{{ trans('uep.lineasCredito.fields.name') }}</th>
            <th class="text-center">{{ trans('uep.lineasCredito.fields.maximum_amount') }}</th>
            <th class="text-center">{{ trans('uep.lineasCredito.fields.maximum_grace') }}</th>
            <th class="text-center">{{ trans('uep.lineasCredito.fields.maximum_amortization') }}</th>
            <th class="text-center">{{ trans('uep.lineasCredito.fields.rate') }}</th>
            <th class="text-center" style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($creditLines as $key => $a)
            <tr data-entry-id="{{ $a->id }}">
                <td></td>
                <td>{{ $a->name ?? '' }}</td>
                <td class="text-center">$ {{ number_format($a->maximum_amount, 2, ",", ".") }}</td>
                <td class="text-center">{{ $a->maximum_grace ?? '' }}</td>
                <td class="text-center">{{ $a->maximum_amortization }}</td>
                <td class="text-center">{{ $a->rate }}</td>
                <td class="text-center">
                    @can('lineasCredito_show')
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.creditLine.show', $a->id) }}">
                            {{ trans('uep.view') }}
                        </a>
                    @endcan
                    @can('lineasCredito_edit')

                        <a class="btn btn-xs btn-info" href="{{ route('admin.creditLine.edit', $a->id) }}">
                            {{ trans('uep.edit') }}
                        </a>

                    @endcan
                    @can('lineasCredito_delete')

                        <form action="{{ route('admin.creditLine.destroy', $a->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('uep.delete') }}">
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>