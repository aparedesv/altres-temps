<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Helpers\LocationHelper;
use App\Libraries\CoordinateLibrary;
use App\Http\Controllers\WebController;

class HomeWebController extends WebController
{
    public function index(Request $request)
    {
        // Obtén la IP de l'usuari
        $ip = $request->getClientIp();

        // Obté les coordenades geogràfiques
        $geolocalitzacio = LocationHelper::obtenirGeolocalitzacioPerIP($ip);

        $data['lat'] = 0;
        $data['lon'] = 0;

        if($geolocalitzacio)
        {
            $data['lat'] = $geolocalitzacio['lat'];
            $data['lon'] = $geolocalitzacio['lon'];
        }

        // obtenim les coordenades existents
        $data['marks'] = CoordinateLibrary::index();

        return view('web.home.home', $data);
    }
}
