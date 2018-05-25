@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row justify-content-start d-flex justify-content-start flex-wrap">
            <!-- Map display -->
            @if( $results == 0 )
            <div class="container col-md-12 d-flex">
                <div class="col-md-4"></div>
                <div class="new-map-button btn btn-primary col-md-4">
                    <a href="{{ url('/maps/create') }}">Maak hier je eerste map aan!</a>
                </div>
                <div class="col-md-4"></div>
            </div>

            @else
            @foreach($maps as $map)
                <div class="col-md-2 map-wrapper">
                    <div class="map-container">
                        <div class="image-container">
                            <img src="{{ asset('img/thumbnail.jpg') }}" alt="">
                        </div>
                        <div class="map-caption d-flex justify-content-between align-items-center">
                            <p class="map-title">{{ $map->map_name }}</p>
                            <div class="button-section">
                                <a class="btn btn-info" href="maps/{{ $map->map_id }}/edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal"><i class="far fa-times-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Map verwijderen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Weet je zeker dat je de map wilt verwijderen?</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="{{ action('MapController@destroy', $map->map_id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Verwijderen</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
                @endforeach                
            @endif
            </div>
        </div>
    </div>

@endsection