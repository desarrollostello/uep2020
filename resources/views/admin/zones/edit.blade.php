@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('uep.edit') }} {{ trans('uep.zona.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.zone.update", [$zona->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('uep.zona.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($zone) ? $zone->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('uep.zona.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('uep.save') }}">
                <button type="button" class="btn btn-secondary pull-right" onclick="history.back()">{{ trans('uep.cancel') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection