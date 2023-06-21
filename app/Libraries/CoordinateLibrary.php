<?php

namespace App\Libraries;

use App\Models\Coordinate;
use Illuminate\Support\Facades\Auth;

class CoordinateLibrary
{

    public static function index()
    {
        return Coordinate::all();
    }

    public static function create($newCoordinate)
    {
        $coordinate = new Coordinate;
        return $coordinate->create([
            'latitude' => $newCoordinate[1],
            'longitude' => $newCoordinate[0],
            'created_by' => Auth::user()->id
        ]);
    }
}
