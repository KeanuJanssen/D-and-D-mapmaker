@extends('layouts.app')

@section('content')
<div class="container vertical-middle">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nieuw Map') }}</div>
                <div class="card-body">
                    <form action="{{ action('MapController@store') }}" method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label for="mapname" class="col-md-4 col-form-label text-md-right">{{ __('Map naam') }}</label>

                            <div class="col-md-6">
                                <input id="mapname" type="text" class="form-control{{ $errors->has('mapname') ? ' is-invalid' : '' }}" name="mapname" required autofocus>

                                @if ($errors->has('mapname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mapname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gridsize" class="col-md-4 col-form-label text-md-right">{{ __('Formaat roostervakjes') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="gridsize" name="gridsize" required autofocus>
                                    <option value="2,5">2,5cm</option>
                                    <option value="2">2cm</option>
                                    <option value="3">3cm</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Maken') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection