@extends('layouts.admin')
@section('content')
@can('alerta_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.alert.create") }}">
                {{ trans('uep.alerta.add') }} {{ trans('uep.alerta.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('uep.alerta.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            @include('admin.alerts._table')
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
    url: "{{ route('admin.alert.massDestroy') }}",
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
@can('alerta_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection