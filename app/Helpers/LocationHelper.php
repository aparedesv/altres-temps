<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class LocationHelper
{

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
