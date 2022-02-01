<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelyRequest;
use App\Models\Hely;
use Illuminate\Http\Request;

class HelyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helys = Hely::all();
        return response()->json($helys);
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
    public function store(HelyRequest $request)
    {
        $hely = new Hely();
        $hely->fill($request->all());
        $hely->save();
        return response()->json($hely, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hely = Hely::findOrFail($id);
        return response()->json($hely);
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
    public function update(HelyRequest $request, $id)
    {
        $hely = Hely::findOrFail($id);
        $hely->fill($request->all());
        $hely->save();
        return response()->json($hely, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hely::destroy($id);
        return response()->noContent();
    }
}
