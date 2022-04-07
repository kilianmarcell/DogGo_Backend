<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Http\Requests\RatingUpdateRequest;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings = Rating::all();
        return response()->json($ratings);
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
        $validator = Validator::make($request->all(), (new RatingRequest())->rules());
        if  ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }

        $rating = new Rating();
        $rating->fill($request->all());
        $rating->save();
        return response()->json($rating, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rating = Rating::find($id);
        if (is_null($rating)) {
            return response()->json(["message" => "A megadott azonosítóval nem található értékelés."], 404);
        }
        return response()->json($rating);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new RatingUpdateRequest())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json(["message" => $errormsg], 400);
            }
        }
        $rating = Rating::find($id);
        if (is_null($rating)) {
            return response()->json(["message" => "A megadott azonosítóval nem található értékelés."], 404);
        }
        $rating->fill($request->all());
        $rating->save();
        return response()->json($rating, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $rating = Rating::find($id);
        if (is_null($rating)) {
            return response()->json(["message" => "A megadott azonosítóval nem található értékelés."], 404);
        }
        Rating::destroy($id);
        return response()->noContent();
    }
}
