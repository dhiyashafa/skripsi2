@extends('layouts.user')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.alternatif.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("alternatif.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.alternatif.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', '') }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.alternatif.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alamat">{{ trans('cruds.alternatif.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" required>
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.alternatif.fields.alamat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nomer">{{ trans('cruds.alternatif.fields.nomer') }}</label>
                <input class="form-control {{ $errors->has('nomer') ? 'is-invalid' : '' }}" type="text" name="nomer" id="nomer" value="{{ old('nomer') }}" required>
                @if($errors->has('nomer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.alternatif.fields.nomer_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection