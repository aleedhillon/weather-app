<?php

namespace App\Http\Controllers;

use Zttp\Zttp;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $apiKey = config('services.weatherbit.key');
        
        // $lat = $request->lat;
        // $lon = $request->lon;
        $city = $request->city;
        $days = 6;

        $weatherbitApi = "http://api.weatherbit.io/v2.0/forecast/daily?key=$apiKey&days=$days&city=$city";

        $response = Zttp::get($weatherbitApi);
        
        return $response->json();
    }
}
