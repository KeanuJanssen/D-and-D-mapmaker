@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <!-- Map display -->
        <div class="col-md-2" style="background:olive;">
            <div class="image-container">
                <img src="{{ asset('img/placeholder-map-image.jpg') }}" alt="">
            </div>
            <div class="map-caption">
                <p class="map-title"></p>
                <a class="" href=""></a>
                <a class="" href=""></a>
            </div>
        </div>
    </div>
</div>
@endsection