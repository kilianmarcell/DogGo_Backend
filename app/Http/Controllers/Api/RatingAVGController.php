<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingAVGController extends Controller
{
    public function getBest() {
        $location = Location::with('ratings')
             ->join('ratings', 'location_id', '=', 'locations.id')
             ->select('locations.name', Location::raw('ROUND(AVG(ratings.stars), 1) as atlag'))
             ->groupBy('locations.name')
             ->orderBy('atlag', 'desc')
             ->first('locations.name', 'atlag');

             return response()->json($location);
    }

    public function getWorst() {
        $location = Location::with('ratings')
             ->join('ratings', 'location_id', '=', 'locations.id')
             ->select('locations.name', Location::raw('ROUND(AVG(ratings.stars), 1) as atlag'))
             ->groupBy('locations.name')
             ->orderBy('atlag', 'asc')
             ->first('locations.name', 'atlag');

             return response()->json($location);
    }

    public function getRatingByUser(int $id) {
        $ratings = Rating::where('user_id', '=', $id)->get();
        return response()->json($ratings);
    }
}
