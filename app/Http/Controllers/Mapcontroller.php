<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use App\Sprite;
use App\Spritecategory;

class MapController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::where('user_id', auth()->user()->id)->get();
        $results = count($maps);
        return view('maps.view', compact('maps', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('maps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'mapname'      => 'required | max:255', 
            'gridsize'     => 'required', 
        ]);
        $Map                = new Map();
        $Map->user_id       = auth()->user()->id;
        $Map->map_name      = $request->mapname;
        $Map->grid_size     = $request->gridsize;
        $Map->save();
        return redirect()->action('MapController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $map = Map::where('map_id', $id)->first();
        $sprite_cats = Spritecategory::get();
        $sprites = Sprite::get();
        return view('maps.edit', compact('map', 'sprite_cats', 'sprites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gridArrayString'      => 'required',
        ]);
        // dd($id);
        $Map                = Map::find($id);
        $Map->grid_array    = $request->gridArrayString;
        $Map->update();
        return redirect()->action('MapController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Map::where('map_id', $id)->delete();
        return redirect()->action('MapController@index');
    }
}
