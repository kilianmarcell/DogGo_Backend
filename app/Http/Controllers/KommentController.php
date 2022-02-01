<?php

namespace App\Http\Controllers;

use App\Http\Requests\KommentRequest;
use App\Models\Komment;
use Illuminate\Http\Request;

class KommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $komments = Komment::all();
        return response()->json($komments);
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
    public function store(KommentRequest $request)
    {
        $komments = new Komment();
        $komments->fill($request->all());
        $komments->save();
        return response()->json($komments, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $komment = Komment::findOrFail($id);
        return response()->json($komment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(KommentRequest $request, Komment $komment)
    {
        $komment->fill($request->all());
        $komment->save();
        return response()->json($komment, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komment::destroy($id);
        return response()->noContent();
    }
}
