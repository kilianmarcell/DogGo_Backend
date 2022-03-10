<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationCountController extends Controller
{
    public function getNewLocationCount() {
        $locationCount = Location::where('locations.allowed', '=', '0')->count();
             return response()->json($locationCount);
    }

    public function getAllowedLocationCount() {
        $locationCount = Location::where('locations.allowed', '=', '1')->count();
             return response()->json($locationCount);
    }
}