<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use App\Libraries\CoordinateLibrary;

class LocationHelper
{

    public static function index($request)
    {
        // Obtén la IP de l'usuari
        $ip = $request->getClientIp();

        // Obté les coordenades geogràfiques
        $geolocalitzacio = self::obtenirGeolocalitzacioPerIP($ip);

        $data['lat'] = 0;
        $data['lon'] = 0;

        if($geolocalitzacio)
        {
            $data['lat'] = $geolocalitzacio['lat'];
            $data['lon'] = $geolocalitzacio['lon'];
        }

        // obtenim les coordenades existents
        $data['marks'] = CoordinateLibrary::index();

        return $data;
    }

    public static function obtenirGeolocalitzacioPerIP($ip)
    {
        if($ip == 'localhost' || $ip == '127.0.0.1')
        {
            return null;
        }

        $client = new Client();
        $response = $client->get("http://ip-api.com/json/{$ip}");

        if ($response->getStatusCode() == 200)
        {
            $data = json_decode($response->getBody());

            // Extreu la latitud i longitud
            $lat = $data->lat;
            $lon = $data->lon;

            return compact('lat', 'lon');
        }

        return null;
    }
}
