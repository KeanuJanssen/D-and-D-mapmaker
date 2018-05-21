@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        {{ Form::open(array('url' => 'foo/bar')) }}
            //
        {{ Form::close() }}
    </div>
</div>
    
@endsection