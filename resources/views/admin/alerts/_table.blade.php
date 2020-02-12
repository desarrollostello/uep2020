<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th>{{ trans('uep.alerta.fields.name') }}</th>
            <th>{{ trans('uep.alerta.fields.state') }}</th>
            <th>{{ trans('uep.alerta.fields.days') }}</th>
            <th>{{ trans('uep.alerta.fields.message') }}</th>
            <th style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alerts as $key => $a)
            <tr data-entry-id="{{ $a->id }}">
                <td></td>
                <td>{{ $a->name ?? '' }}</td>
                <td>{{ $a->state ?? '' }}</td>
                <td>{{ $a->days }}</td>
                <td>{{ $a->message }}</td>
                <td>
                    @can('alerta_show')
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.alert.show', $a->id) }}">
                            {{ trans('uep.view') }}
                        </a>
                    @endcan
                    @can('alerta_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.alert.edit', $a->id) }}">
                            {{ trans('uep.edit') }}
                        </a>
                    @endcan
                    @can('alerta_delete')
                        <form action="{{ route('admin.alert.destroy', $a->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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