@extends('layouts.admin')
@section('content')
@can('garantia_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.guarantie.create") }}">
                {{ trans('uep.garantia.add') }} {{ trans('uep.garantia.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('uep.garantia.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            {{ trans('uep.garantia.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guaranties as $key => $guarantie)
                        <tr data-entry-id="{{ $guarantie->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $guarantie->name ?? '' }}
                            </td>
                           
                            <td>
                              <!--
                                @can('garantia_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.guarantie.show', $guarantie->id) }}">
                                        {{ trans('uep.view') }}
                                    </a>
                                @endcan
                              -->
                                @can('garantia_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.guarantie.edit', $guarantie->id) }}">
                                        {{ trans('uep.edit') }}
                                    </a>
                                @endcan
                                @can('garantia_delete')
                                    <form action="{{ route('admin.guarantie.destroy', $guarantie->id) }}" method="POST" onsubmit="return confirm('{{ trans('uep.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.guarantie.massDestroy') }}",
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
@can('garantia_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection