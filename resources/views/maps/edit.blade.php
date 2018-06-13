@extends('layouts.app')




@section('content')

<div class="container-fluid">
   <div class="row">
       <div class="col vh-87-1" style="background: #ffdead;">
            <div class="row py-4 no-gutters">
                <div class="main-sprites col-12 row no-gutters border-bottom border-dark" style="cursor:pointer; border-bottom: 5px solid black!important;">
                    @foreach($sprite_cats as $sprite_cat)
                        <div class="col-2"><img id="sprite-catagory-{{ $sprite_cat->cat_name }}s" class="w-100 sprite-catagory" src="{{ asset('img/sprites/' . $sprite_cat->cat_img ) }}" alt="error"></div>
                    @endforeach
                </div>
                <div class="sub-sprites col-12 no-gutters">
                    @foreach($sprite_cats as $sprite_cat)
                        <div id="{{$sprite_cat->cat_name}}-sprites" class="row no-gutters display-none">

                            @foreach($sprites as $sprite)
                                @if($sprite->cat_id == $sprite_cat->cat_id)
                                    <div class="col-2 border"><img id="sub-sprite-{{ $sprite->sprite_id }}" class="w-100 sub-sprite" src="{{ asset('img/sprites/' . $sprite->sprite_img) }}" alt=""></div>
                                @endif
                            @endforeach
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-10">
           <div class="row" style="height: 75vh!important;overflow-y:scroll;">
                <div id="the-map" class="row" style="width: 51.5vw; height: 36vw;">
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-1" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-2" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-3" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-4" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-5" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-6" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-7" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-8" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-9" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-10" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-11" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-12" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-13" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-14" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-15" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-16" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-17" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-18" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-19" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-20" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-21" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-22" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-23" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-24" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-25" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-26" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-27" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-28" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-29" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-30" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-31" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-32" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-33" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-34" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-35" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-36" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-37" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-38" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-39" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-40" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-41" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-42" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-43" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-44" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-45" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-46" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-47" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-48" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-49" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-50" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-51" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-52" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-53" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-54" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-55" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-56" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-57" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-58" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-59" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-60" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-61" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-62" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-63" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-64" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-65" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-66" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-67" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-68" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-69" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-70" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-71" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-72" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-73" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-74" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-75" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-76" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-77" class="col sprite-slot"></div>
                    </div>
                    <div class="sprite-slot-bar col-12 row no-gutters">
                        <div sprite="0" id="slot-78" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-79" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-80" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-81" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-82" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-83" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-84" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-85" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-86" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-87" class="col sprite-slot"></div>
                        <div sprite="0" id="slot-88" class="col sprite-slot"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 12vh!important; background: grey;">
                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                    <button id="download-button" class="btn btn-primary bottom-menu-buttons">Download</button>
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
                            <button id="delete-button" class="btn btn-danger bottom-menu-buttons" data-toggle="modal" data-target="#deleteModal">Verwijderen</button>
                        </div>
                    </div>
               </div>
               <div class="col-3 d-flex justify-content-center align-items-center">
               <form action="{{ action('MapController@update', $map->map_id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input id="gridArrayString" name="gridArrayString" type="hidden" value="">
                    <button id="opslaan-button" class="btn btn-success bottom-menu-buttons" type="submit">Opslaan</button>
                </form>
               </div>
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
@endsection
