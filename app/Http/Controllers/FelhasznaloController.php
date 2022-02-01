<?php

namespace App\Http\Controllers;

use App\Http\Requests\FelhasznaloRequest;
use App\Models\Felhasznalo;

class FelhasznaloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $felhasznalos = Felhasznalo::all();
        return response()->json($felhasznalos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FelhasznaloRequest $request)
    {
        $felhasznalo = new Felhasznalo();
        $felhasznalo->fill($request->all());
        $felhasznalo->save();
        return response()->json($felhasznalo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $felhasznalo = Felhasznalo::findOrFail($id);
        return response()->json($felhasznalo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Felhasznalo $felhasznalo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FelhasznaloRequest $request, $id)
    {
        $felhasznalo = Felhasznalo::findOrFail($id);
        $felhasznalo->fill($request->all());
        $felhasznalo->save();
        return response()->json($felhasznalo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Felhasznalo::destroy($id);
        return response()->noContent();
    }
}
