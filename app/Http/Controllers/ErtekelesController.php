<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErtekelesRequest;
use App\Models\Ertekeles;
use Illuminate\Http\Request;

class ErtekelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ertekeles = Ertekeles::all();
        return response()->json($ertekeles);
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
    public function store(Request $request)
    {
        $ertekeles = new Ertekeles();
        $ertekeles->fill($request->all());
        $ertekeles->save();
        return response()->json($ertekeles, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ertek = Ertekeles::findOrFail($id);
        return response()->json($ertek);
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
    public function update(ErtekelesRequest $request, Ertekeles $ertekeles)
    {
        $ertekeles->fill($request->all());
        $ertekeles->save();
        return response()->json($ertekeles, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ertekeles::destroy($id);
        return response()->noContent();
    }
}
