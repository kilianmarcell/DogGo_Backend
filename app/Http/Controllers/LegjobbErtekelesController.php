<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LegjobbErtekelesController extends Controller
{
    public function index() {
        $location = Location::with('ratings')
             ->join('ratings', 'location_id', '=', 'locations.id')
             ->select('locations.name', Location::raw('AVG(ratings.stars) as atlag'))
             ->groupBy('locations.name')
             ->orderBy('atlag', 'desc')
             ->limit(1)
             ->get('locations.name', 'atlag');

             return response()->json($location);
    }
}
