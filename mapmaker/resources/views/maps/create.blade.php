@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="row">
       <div class="col vh-87-1" style="background: lightgrey;">
           <div class="row py-4 no-gutters">
                <div class="main-sprites col-12 row no-gutters border-bottom border-dark">
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
           <div class="row map-grid" style="width: 54vw; height: 37.95vw;">
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-1" class="col sprite-slot"></div>
                    <div id="sprite-slot-2" class="col sprite-slot"></div>
                    <div id="sprite-slot-3" class="col sprite-slot"></div>
                    <div id="sprite-slot-4" class="col sprite-slot"></div>
                    <div id="sprite-slot-5" class="col sprite-slot"></div>
                    <div id="sprite-slot-6" class="col sprite-slot"></div>
                    <div id="sprite-slot-7" class="col sprite-slot"></div>
                    <div id="sprite-slot-8" class="col sprite-slot"></div>
                    <div id="sprite-slot-9" class="col sprite-slot"></div>
                    <div id="sprite-slot-10" class="col sprite-slot"></div>
                    <div id="sprite-slot-11" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-12" class="col sprite-slot"></div>
                    <div id="sprite-slot-13" class="col sprite-slot"></div>
                    <div id="sprite-slot-14" class="col sprite-slot"></div>
                    <div id="sprite-slot-15" class="col sprite-slot"></div>
                    <div id="sprite-slot-16" class="col sprite-slot"></div>
                    <div id="sprite-slot-17" class="col sprite-slot"></div>
                    <div id="sprite-slot-18" class="col sprite-slot"></div>
                    <div id="sprite-slot-19" class="col sprite-slot"></div>
                    <div id="sprite-slot-20" class="col sprite-slot"></div>
                    <div id="sprite-slot-21" class="col sprite-slot"></div>
                    <div id="sprite-slot-22" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-23" class="col sprite-slot"></div>
                    <div id="sprite-slot-24" class="col sprite-slot"></div>
                    <div id="sprite-slot-25" class="col sprite-slot"></div>
                    <div id="sprite-slot-26" class="col sprite-slot"></div>
                    <div id="sprite-slot-27" class="col sprite-slot"></div>
                    <div id="sprite-slot-28" class="col sprite-slot"></div>
                    <div id="sprite-slot-29" class="col sprite-slot"></div>
                    <div id="sprite-slot-30" class="col sprite-slot"></div>
                    <div id="sprite-slot-31" class="col sprite-slot"></div>
                    <div id="sprite-slot-32" class="col sprite-slot"></div>
                    <div id="sprite-slot-33" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-34" class="col sprite-slot"></div>
                    <div id="sprite-slot-35" class="col sprite-slot"></div>
                    <div id="sprite-slot-36" class="col sprite-slot"></div>
                    <div id="sprite-slot-37" class="col sprite-slot"></div>
                    <div id="sprite-slot-38" class="col sprite-slot"></div>
                    <div id="sprite-slot-39" class="col sprite-slot"></div>
                    <div id="sprite-slot-40" class="col sprite-slot"></div>
                    <div id="sprite-slot-41" class="col sprite-slot"></div>
                    <div id="sprite-slot-42" class="col sprite-slot"></div>
                    <div id="sprite-slot-43" class="col sprite-slot"></div>
                    <div id="sprite-slot-44" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-45" class="col sprite-slot"></div>
                    <div id="sprite-slot-46" class="col sprite-slot"></div>
                    <div id="sprite-slot-47" class="col sprite-slot"></div>
                    <div id="sprite-slot-48" class="col sprite-slot"></div>
                    <div id="sprite-slot-49" class="col sprite-slot"></div>
                    <div id="sprite-slot-50" class="col sprite-slot"></div>
                    <div id="sprite-slot-51" class="col sprite-slot"></div>
                    <div id="sprite-slot-52" class="col sprite-slot"></div>
                    <div id="sprite-slot-53" class="col sprite-slot"></div>
                    <div id="sprite-slot-54" class="col sprite-slot"></div>
                    <div id="sprite-slot-55" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-56" class="col sprite-slot"></div>
                    <div id="sprite-slot-57" class="col sprite-slot"></div>
                    <div id="sprite-slot-58" class="col sprite-slot"></div>
                    <div id="sprite-slot-59" class="col sprite-slot"></div>
                    <div id="sprite-slot-60" class="col sprite-slot"></div>
                    <div id="sprite-slot-61" class="col sprite-slot"></div>
                    <div id="sprite-slot-62" class="col sprite-slot"></div>
                    <div id="sprite-slot-63" class="col sprite-slot"></div>
                    <div id="sprite-slot-64" class="col sprite-slot"></div>
                    <div id="sprite-slot-65" class="col sprite-slot"></div>
                    <div id="sprite-slot-66" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-67" class="col sprite-slot"></div>
                    <div id="sprite-slot-68" class="col sprite-slot"></div>
                    <div id="sprite-slot-69" class="col sprite-slot"></div>
                    <div id="sprite-slot-70" class="col sprite-slot"></div>
                    <div id="sprite-slot-71" class="col sprite-slot"></div>
                    <div id="sprite-slot-72" class="col sprite-slot"></div>
                    <div id="sprite-slot-73" class="col sprite-slot"></div>
                    <div id="sprite-slot-74" class="col sprite-slot"></div>
                    <div id="sprite-slot-75" class="col sprite-slot"></div>
                    <div id="sprite-slot-76" class="col sprite-slot"></div>
                    <div id="sprite-slot-77" class="col sprite-slot"></div>
                </div>
                <div class="sprite-slot-bar col-12 row no-gutters">
                    <div id="sprite-slot-78" class="col sprite-slot"></div>
                    <div id="sprite-slot-79" class="col sprite-slot"></div>
                    <div id="sprite-slot-80" class="col sprite-slot"></div>
                    <div id="sprite-slot-81" class="col sprite-slot"></div>
                    <div id="sprite-slot-82" class="col sprite-slot"></div>
                    <div id="sprite-slot-83" class="col sprite-slot"></div>
                    <div id="sprite-slot-84" class="col sprite-slot"></div>
                    <div id="sprite-slot-85" class="col sprite-slot"></div>
                    <div id="sprite-slot-86" class="col sprite-slot"></div>
                    <div id="sprite-slot-87" class="col sprite-slot"></div>
                    <div id="sprite-slot-88" class="col sprite-slot"></div>
                </div>
           </div>
           <div class="row" style="height: 12vh!important; background: grey;">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary bottom-menu-buttons">Weergaven</button>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="badge badge-light bottom-menu-buttons w-100">Papier grote: A4</div>
                    <div class="badge badge-light bottom-menu-buttons w-100">Sprite grote: 2,5</div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                    <button id="gum-button" class="btn btn-danger bottom-menu-buttons w-100">Gum</button>
                    <button id="delete-button" class="btn btn-danger bottom-menu-buttons w-100">Verwijderen</button>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-success bottom-menu-buttons">Opslaan</button>
                </div>
           </div>
       </div>
   </div>
</div>
@endsection