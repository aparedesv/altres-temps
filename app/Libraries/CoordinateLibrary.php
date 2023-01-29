<?php

namespace App\Libraries;

use App\Models\Coordinate;
use Illuminate\Support\Facades\Auth;

class CoordinateLibrary
{
    static function insert($request)
    {
        return Coordinate::create([
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'created_by' => Auth::id()
        ]);
    }
}
