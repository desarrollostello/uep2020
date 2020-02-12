<div class="row align-items-center">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

            <label for="name">{{ trans('uep.lineasCredito.fields.name') }}*</label>
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
        <div class="form-group {{ $errors->has(''maximum_amount') ? 'has-error' : '' }}">
            <label for="'maximum_amount">{{ trans('uep.lineasCredito.fields.'maximum_amount') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="monto_maximo" data-mensaje="En este campo deberá completar el ESTADO que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text(''maximum_amount', null, ['class' =>'form-control'] ) !!}
            @if($errors->has(''maximum_amount'))
                <p class="help-block">
                    {{ $errors->first(''maximum_amount') }}
                </p>
            @endif      
        </div>  <!-- end form-group-->
    </div> <!-- end col 2 -->
    <div class="col-lg-4 col-sm-4 col-md-4">
        <div class="form-group {{ $errors->has('maximum_grace') ? 'has-error' : '' }}">
            <label for="maximum_grace">{{ trans('uep.lineasCredito.fields.maximum_grace') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="gracia_maximo" data-mensaje="En este campo deberá completar el CODIGO que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('maximum_grace', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('maximum_grace'))
                <p class="help-block">
                    {{ $errors->first('maximum_grace') }}
                </p>
            @endif 
        </div> <!-- end form-group-->
    </div> <!-- end col 3 -->
</div><!-- end row -->
<div class="row align-items-center">
    <div class="col-lg-4 col-sm-4 col-md-4">
        <div class="form-group {{ $errors->has('maximum_amortization') ? 'has-error' : '' }}">
            <label for="maximum_amortization">{{ trans('uep.lineasCredito.fields.maximum_amortization') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="amortizacion_maximo" data-mensaje="En este campo deberá completar el CODIGO que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('maximum_amortization', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('maximum_amortization'))
                <p class="help-block">
                    {{ $errors->first('maximum_amortization') }}
                </p>
            @endif   
        </div> <!-- end form-group-->
    </div> <!-- end col 3 -->
    <div class="col-lg-2 col-sm-4 col-md-2">
        <div class="form-group {{ $errors->has('rate') ? 'has-error' : '' }}">
            <label for="rate">{{ trans('uep.lineasCredito.fields.rate') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="tasa" data-mensaje="En este campo deberá completar el DIAS que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::text('rate', null, ['class' =>'form-control'] ) !!}
            @if($errors->has('rate'))
                <p class="help-block">
                    {{ $errors->first('rate') }}
                </p>
            @endif   
        </div><!-- end form-group-->
    </div><!-- end col 2 -->
</div>

<div class="row align-items-center">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="description">{{ trans('uep.lineasCredito.fields.description') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="descripcion" data-mensaje="En este campo deberá completar el MENSAJE que Ud. desee ponerle a la ALERTA.">
              <i class="fa fa-question-circle"></i>
            </button>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 1, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
            @if($errors->has('description'))
                <p class="help-block">
                    {{ $errors->first('description') }}
                </p>
            @endif  
        </div><!-- end form-group-->
    </div><!-- end col 3 -->
</div> <!-- end row -->

<div style="margin-top:30px;" class="row align-items-center">
    <div class="col-12">
    	{!! Form::submit('GUARDAR', ['style'=>'padding-top:10px; padding-bottom: 10px; padding-left: 30px; padding-right: 30px;', 'class' => 'btn btn-primary btn-lg btn-success']) !!}
    </div>
</div>