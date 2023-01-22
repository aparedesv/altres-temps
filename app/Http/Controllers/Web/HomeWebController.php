<?php

namespace App\Http\Controllers\Web;

class HomeWebController extends WebController
{
    //per decidir què veuran els visitants (usuaris sense compte)

    public function index()
    {
        $data['view'] = config('constants.VIEW_WEB_HOME');
        return view('web.home.index', $data);
    }
}
