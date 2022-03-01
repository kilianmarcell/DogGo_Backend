<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationFilterController extends Controller
{
    public function getAllowed() {
        $location = Location::select('*')
            ->where('locations.allowed', '=', '1')
            ->get();

            return response()->json($location);
    }

    public function getNotAllowed() {
        $location = Location::select('*')
            ->where('locations.allowed', '=', '0')
            ->get();

            return response()->json($location);
    }
}
