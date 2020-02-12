<div class="row align-items-center">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">{{ trans('uep.localidad.fields.name') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="nombre" data-mensaje="En este campo deberá completar el nombre que Ud. desee ponerle a la Localidad. Este nombre deberá ser identificatorio del mensaje a emitir">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('name', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div><!-- end form-group-->
    </div> <!-- end col 1 -->
</div>
<div class="row align-items-center">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('zone_id') ? 'has-error' : '' }}">
            <label for="estado">{{ trans('uep.localidad.fields.zone_id') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="zone" data-mensaje="En este campo deberá Seleccionar la Zona a la cual pertenece la Localidad.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::select('zone_id', $zones, null, ['placeholder'=>'Seleccione', 'class' => 'form-control',  'id' => 'zone', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
            @if($errors->has('zone_id'))
                <p class="help-block">
                    {{ $errors->first('zone_id') }}
                </p>
            @endif
        </div>  <!-- end form-group-->
    </div> <!-- end col 2 -->

    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('dpto_id') ? 'has-error' : '' }}">
            <label for="dpto_id">{{ trans('uep.localidad.fields.dpto_id') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="zone" data-mensaje="En este campo deberá Seleccionar el Departamento al cual pertenece la Localidad.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::select('dpto_id', $dptos, null, ['placeholder'=>'Seleccione', 'class' => 'form-control',  'id' => 'dpto', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
            @if($errors->has('dpto_id'))
                <p class="help-block">
                    {{ $errors->first('dpto_id') }}
                </p>
            @endif
        </div>  <!-- end form-group-->
    </div> <!-- end col 2 -->

    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('cp') ? 'has-error' : '' }}">
            <label for="cp">{{ trans('uep.localidad.fields.cp') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="zone" data-mensaje="En este campo deberá Ingresar el Código Postal de la Localidad.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('cp', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('cp'))
                <p class="help-block">
                    {{ $errors->first('cp') }}
                </p>
            @endif
        </div>  <!-- end form-group-->
    </div> <!-- end col 2 -->

</div><!-- end row -->

<div style="margin-top:30px;" class="row align-items-center">
    <div class="col-12">
    	{!! Form::submit('GUARDAR', ['style'=>'padding-top:10px; padding-bottom: 10px; padding-left: 30px; padding-right: 30px;', 'class' => 'btn btn-primary btn-lg btn-success']) !!}
    </div>

</div>