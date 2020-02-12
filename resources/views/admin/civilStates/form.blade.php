<div class="row align-items-center">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">{{ trans('uep.estadoCivil.fields.name') }}*</label>
            <button style="padding-left: 0px !important; padding-right: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; margin-top: -5px !important; color: #cccccc !important" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="nombre" data-mensaje="En este campo deberá completar el nombre que Ud. desee ponerle a la ALERTA. Este nombre deberá ser identificatorio del mensaje a emitir">
              <i class="fa fa-question-circle"></i>
            </button>
            {{ Form::text('name', null, ['class' =>'form-control'] ) }}
            @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div><!-- end form-group-->
    </div> <!-- end col 1 -->
</div><!-- end row -->

<div style="margin-top:30px;" class="row align-items-center">
    <div class="col-12">
        {!! Form::submit('GUARDAR', ['style'=>'padding-top:10px; padding-bottom: 10px; padding-left: 30px; padding-right: 30px;', 'class' => 'btn btn-primary btn-lg btn-success']) !!}
    </div>
</div>