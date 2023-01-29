<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Coordinate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backoffice\BackofficeController;

class HomeBackofficeController extends BackofficeController
{
    public function index()
    {
        $data['coordinates'] = Coordinate::
            with('pictures')->
            where('created_by', Auth::id())
            ->get();

        $data['userFolder'] = $this->getUserFolder(Auth::id());
        $data['view'] = config('constants.VIEW_BACKOFFICE_HOME');
        return view('backoffice.home.index', $data);
    }
}
