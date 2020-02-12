@extends('layouts.admin')
@section('content')
@can('provincia_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.province.create") }}">
                {{ trans('uep.provincia.add') }} {{ trans('uep.provincia.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('uep.provincia.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('uep.provincia.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($provinces as $key => $pro)
                        <tr data-entry-id="{{ $pro->id }}">
                            <td>
                            </td>
                            <td>
                                {{ $pro->name ?? '' }}
                            </td>
                            <td>
                              <!--
                                @can('provincia_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.province.show', $pro->id) }}">
                                        {{ trans('uep.view') }}
                                    </a>
                                @endcan
                              -->
                                @can('provincia_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.province.edit', $pro->id) }}">
                                        {{ trans('uep.edit') }}
                                    </a>
                                @endcan
                                @can('provincia_delete')
                                    <form action="{{ route('admin.province.destroy', $pro->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.province.massDestroy') }}",
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
@can('provincia_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection