<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th>{{ trans('uep.estado.fields.name') }}</th>
            <th style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($states as $key => $b)
            <tr data-entry-id="{{ $b->id }}">
                <td></td>
                <td>{{ $b->name ?? '' }}</td>
                <td>
                    @can('estado_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.state.edit', $b->id) }}">
                            {{ trans('uep.edit') }}
                        </a>
                    @endcan
                    @can('estado_delete')
                        <form action="{{ route('admin.state.destroy', $b->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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