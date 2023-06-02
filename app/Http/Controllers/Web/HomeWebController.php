<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;

class HomeWebController extends WebController
{
    public function index()
    {
        return view('web.home.home');
    }
}
