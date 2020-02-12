<table class=" table mdl-data-table table-bordered table-striped table-hover datatable">
    <thead>
        <tr>
            <th width="10"></th>
            <th>{{ trans('uep.departamento.fields.name') }}</th>
            <th style="width: 15%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departaments as $key => $d)
            <tr data-entry-id="{{ $d->id }}">
                <td>
                </td>
                <td>{{ $d->name ?? '' }}</td>
                <td>
                    @can('departamento_show')
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.departament.show', $d->id) }}">
                            {{ trans('uep.view') }}
                        </a>
                    @endcan
                    @can('departamento_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.departament.edit', $d->id) }}">
                            {{ trans('uep.edit') }}
                        </a>
                    @endcan
                    @can('departamento_delete')
                        <form action="{{ route('admin.departament.destroy', $d->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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