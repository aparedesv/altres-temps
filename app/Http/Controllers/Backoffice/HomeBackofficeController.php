<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Helpers\LocationHelper;
use App\Http\Controllers\BackofficeController;

class HomeBackofficeController extends BackofficeController
{
    public function index(Request $request)
    {
        $locationHelper = new LocationHelper;
        return view('web.home.home', $locationHelper->index($request));
    }
}
