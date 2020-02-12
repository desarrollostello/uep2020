<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th>{{ trans('uep.destinoCredito.fields.name') }}</th>
            <th style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinationCredit as $key => $dc)
            <tr data-entry-id="{{ $dc->id }}">
                <td></td>
                <td>{{ $dc->name ?? '' }}</td>
                <td>
                    @can('destinocredito_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.destinationCredit.edit', $dc->id) }}">
                            {{ trans('uep.edit') }}
                        </a>
                    @endcan
                    @can('destinocredito_delete')
                        <form action="{{ route('admin.destinationCredit.destroy', $dc->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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