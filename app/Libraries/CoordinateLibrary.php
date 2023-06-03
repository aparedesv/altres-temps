<?php

namespace App\Libraries;

use App\Models\Coordinate;

class CoordinateLibrary
{

    public static function index()
    {
        return Coordinate::all();
    }
}
