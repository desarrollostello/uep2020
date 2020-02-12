@extends('layouts.admin')
@section('content')
@can('zona_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.zone.create") }}">
                {{ trans('uep.zona.add') }} {{ trans('uep.zona.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('uep.zona.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            {{ trans('uep.zona.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($zones as $key => $z)
                        <tr data-entry-id="{{ $z->id }}">
                            <td>
                            </td>
                            <td>
                                {{ $z->name ?? '' }}
                            </td>
                            <td>
                              <!--
                                @can('estado_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.zone.show', $z->id) }}">
                                        {{ trans('uep.view') }}
                                    </a>
                                @endcan
                              -->
                                @can('zona_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.zone.edit', $z->id) }}">
                                        {{ trans('uep.edit') }}
                                    </a>
                                @endcan
                                @can('zona_delete')
                                    <form action="{{ route('admin.zona.destroy', $z->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('uep.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.zone.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('uep.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('uep.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('zona_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection