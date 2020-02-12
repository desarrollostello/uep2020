@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('uep.sector.create') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sector.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('uep.sector.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($sector) ? $sector->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('uep.sector.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('uep.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection