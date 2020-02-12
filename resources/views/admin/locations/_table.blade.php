<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th>{{ trans('uep.localidad.fields.name') }}</th>
            <th>{{ trans('uep.localidad.fields.dpto_id') }}</th>
            <th>{{ trans('uep.localidad.fields.zone_id') }}</th>
            <th>{{ trans('uep.localidad.fields.cp') }}</th>
            <th style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($locations as $key => $a)
            <tr data-entry-id="{{ $a->id }}">
                <td></td>
                <td>{{ $a->name ?? '' }}</td>
                <td>{{ $a->departament->name ?? '' }}</td>
                <td>{{ $a->zone->name }}</td>
                <td>{{ $a->cp }}</td>
                <td>
                    @can('localidad_show')
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.location.show', $a->id) }}">
                            {{ trans('uep.view') }}
                        </a>
                    @endcan

                    @can('localidad_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.location.edit', $a->id) }}">
                            {{ trans('uep.edit') }}
                        </a>
                    @endcan
                    @can('localidad_delete')
                        <form action="{{ route('admin.location.destroy', $a->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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