<div class="row align-items-center">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">{{ trans('uep.alerta.fields.name') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="nombre" data-mensaje="En este campo deberá completar el nombre que Ud. desee ponerle a la ALERTA. Este nombre deberá ser identificatorio del mensaje a emitir">
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
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
            <label for="state">{{ trans('uep.alerta.fields.state') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="estado" data-mensaje="En este campo deberá completar el ESTADO que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::select('state', [''=>'Seleccione', 'ACTIVA'=>'ACTIVA', 'INACTIVA'=>'INACTIVA'], null, ['class' => 'form-control', 'id' => 'estado', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
            @if($errors->has('state'))
                <p class="help-block">
                    {{ $errors->first('state') }}
                </p>
            @endif
        </div>  <!-- end form-group-->
    </div> <!-- end col 2 -->
    <div class="col-lg-4 col-sm-4 col-md-4">
        <div class="form-group {{ $errors->has('cod') ? 'has-error' : '' }}">
            <label for="cod">{{ trans('uep.alerta.fields.cod') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="codigo" data-mensaje="En este campo deberá completar el CODIGO que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('cod', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('cod'))
                <p class="help-block">
                    {{ $errors->first('codigo') }}
                </p>
            @endif
        </div> <!-- end form-group-->
    </div> <!-- end col 3 -->
</div><!-- end row -->

<div class="row align-items-center">
    <div class="col-lg-2 col-sm-4 col-md-2">
        <div class="form-group {{ $errors->has('color') ? 'has-error' : '' }}">
            <label for="color">{{ trans('uep.alerta.fields.color') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="color" data-mensaje="En este campo deberá completar el COLOR que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button><br />
            <div class="input-group colorpicker-component formcolorpicker">
	            <div class="input-group-append">
	                {!! Form::text('color', null, ['id'=>'color', 'class' =>'input-group-text input-group-addon form-control', 'style'=>'width=100'] ) !!}
	            </div>
	        </div>
            @if($errors->has('color'))
                <p class="help-block">
                    {{ $errors->first('color') }}
                </p>
            @endif
        </div> <!-- end form-group-->
    </div><!-- end col 1 -->

    <div class="col-lg-2 col-sm-4 col-md-2">
        <div class="form-group {{ $errors->has('days') ? 'has-error' : '' }}">
            <label for="days">{{ trans('uep.alerta.fields.days') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="dias" data-mensaje="En este campo deberá completar el DIAS que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('days', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('days'))
                <p class="help-block">
                    {{ $errors->first('days') }}
                </p>
            @endif
        </div><!-- end form-group-->
    </div><!-- end col 2 -->

    <div class="col-lg-8 col-sm-12 col-md-8">
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            <label for="message">{{ trans('uep.alerta.fields.message') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="mensaje" data-mensaje="En este campo deberá completar el MENSAJE que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => 1, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
            @if($errors->has('message'))
                <p class="help-block">
                    {{ $errors->first('message') }}
                </p>
            @endif
        </div><!-- end form-group-->
    </div><!-- end col 3 -->
</div> <!-- end row -->

<div class="row align-items-center">
    <div class="col-12">
        <div class="form-group {{ $errors->has('sql') ? 'has-error' : '' }}">
            <label for="sql">{{ trans('uep.alerta.fields.sql') }}</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="sql" data-mensaje="En este campo deberá completar la SQL que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('sql', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('sql'))
                <p class="help-block">
                    {{ $errors->first('sql') }}
                </p>
            @endif
        </div> <!-- end form-group-->
    </div><!-- end col 3 -->
</div> <!-- end row -->

<div style="margin-top:30px;" class="row align-items-center">
    <div class="col-12">
    	{!! Form::submit('GUARDAR', ['style'=>'padding-top:10px; padding-bottom: 10px; padding-left: 30px; padding-right: 30px;', 'class' => 'btn btn-primary btn-lg btn-success']) !!}
    </div>
</div>