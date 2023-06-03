<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\WebController;
use App\Helpers\LocationHelper;

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

        return view('web.home.home', $data);
    }
}
