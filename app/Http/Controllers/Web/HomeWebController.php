<?php

namespace App\Http\Controllers\Web;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use App\Helpers\LocationHelper;
use App\Libraries\CoordinateLibrary;
use App\Http\Controllers\WebController;

class HomeWebController extends WebController
{
    public function index(Request $request)
    {
        $locationHelper = new LocationHelper;
        return view('web.home.home', $locationHelper->index($request));
    }

    public function show(Coordinate $coordinate)
    {
        return Coordinate::find($coordinate->id)->with('pictures')->first();
    }
}
