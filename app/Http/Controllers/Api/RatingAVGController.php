<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class RatingAVGController extends Controller
{
    public function getBest() {
        $location = Location::with('ratings')
             ->join('ratings', 'location_id', '=', 'locations.id')
             ->select('locations.name', Location::raw('ROUND(AVG(ratings.stars), 1) as atlag'))
             ->groupBy('locations.name')
             ->orderBy('atlag', 'desc')
             ->limit(1)
             ->get('locations.name', 'atlag');

             return response()->json($location);
    }

    public function getWorst() {
        $location = Location::with('ratings')
             ->join('ratings', 'location_id', '=', 'locations.id')
             ->select('locations.name', Location::raw('ROUND(AVG(ratings.stars), 1) as atlag'))
             ->groupBy('locations.name')
             ->orderBy('atlag', 'asc')
             ->limit(1)
             ->get('locations.name', 'atlag');

             return response()->json($location);
    }
}
