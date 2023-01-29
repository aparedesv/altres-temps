<?php

namespace App\Http\Controllers\Backoffice;

class HomeBackofficeController extends BackofficeController
{
    public function index()
    {
        $data['view'] = config('constants.VIEW_BACKOFFICE_HOME');
        return view('backoffice.home.index', $data);
    }
}
