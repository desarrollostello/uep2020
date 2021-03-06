@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12"><h2>{{ trans('uep.edit') }} {{ trans('uep.figuraLegal.title_singular') }}</h2></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12"><button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button></div>
        </div>
        
    </div>
    @if ($action == 'edit')
        <div class="card-body">
            {!! Form::model($legalFigure, ['method' => 'POST', 'route' => ['admin.legalFigure.update', $legalFigure->id]]) !!}
                @csrf
                @method('PUT')
                @include('admin.legalFigures.form')
            <!--</form>-->
            {!! Form::close() !!}
        </div>
    @endif
    @if ($action == 'create')
        <div class="card-body">
          <form action="{{ route("admin.legalFigure.store") }}" method="POST" enctype="multipart/form-data">
              @csrf
              @include('admin.legalFigures.form')
          </form>
      </div>
    @endif
</div>

@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mensaje"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>