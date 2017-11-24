@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">Création d'une catégorie</h1>
    <form class="form-horizontal" method="POST" action="{{ route ('categoryStore') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
            <label for="label" class="col-md-4 control-label">Label</label>

            <div class="col-md-6">
                <input id="label" type="text" class="form-control" name="label" value="{{ old('label') }}" required autofocus>

                @if ($errors->has('label'))
                    <span class="help-block">
                        <strong>{{ $errors->first('label') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Valider
                </button>
            </div>
        </div>
    </form>
@endsection
