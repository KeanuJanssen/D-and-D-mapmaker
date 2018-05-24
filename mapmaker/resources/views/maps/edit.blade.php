@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="row">
       <div class="col vh-87-1" style="background: lightgrey;">
       <div class="row py-4 no-gutters">
                <div class="main-sprites col-12 row no-gutters border-bottom border-dark" style="cursor:pointer; border-bottom: 5px solid black!important;">
                    <div class="col-2"><img id="sprite-catagory-1" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sprite-catagory-2" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sprite-catagory-3" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sprite-catagory-4" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sprite-catagory-5" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sprite-catagory-6" class="w-100 sprite-catagory" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                </div>
                <div class="sub-sprites col-12 row no-gutters">
                    <div class="col-2"><img id="sub-sprite-1-1" class="w-100 sub-sprite" src="{{ asset('img/placeholder-map-image.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sub-sprite-1-2" class="w-100 sub-sprite" src="{{ asset('img/beter.jpg') }}" alt=""></div>
                    <div class="col-2"><img id="sub-sprite-1-3" class="w-100 sub-sprite" src="{{ asset('img/lionflex_color.png') }}" alt=""></div>
                </div>
           </div>
       </div>
       <div class="col-10">
           <div class="row" style="height: 75vh!important; background: green;">
                <div class="col-12 map-grid" style="background: #4286f4;">
                    <div class="sprite-slot border border-dark"></div>
                </div>
           </div>
            <div class="row" style="height: 12vh!important; background: grey;">
                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                    <button class="btn btn-primary bottom-menu-buttons">Weergaven</button>
               </div>
               <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="badge badge-light bottom-menu-buttons h-35 d-flex justify-content-center align-items-center flex-column">
                    <p>Papier grote: A4</p>
                    <p>Sprite grote: 2,5</p>
                    </div>
               </div>
               <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-6">
                            <button id="gum-button" class="btn btn-danger bottom-menu-buttons">Gum</button>
                        </div>
                        <div class="col-6">
                            <button id="delete-button" class="btn btn-danger bottom-menu-buttons">Verwijderen</button>
                        </div>
                    </div>
               </div>
               <div class="col-3 d-flex justify-content-center align-items-center">
                <button class="btn btn-success bottom-menu-buttons">Opslaan</button>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
