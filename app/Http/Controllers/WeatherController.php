<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zttp\Zttp;

class WeatherController extends Controller
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

        // $weatherstackApi = "http://api.weatherstack.com/current?access_key=$apiKey&query=$city";
        // $openweathermapApi = "https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&appid=$apiKey";
        $weatherbitApi = "http://api.weatherbit.io/v2.0/current?key=$apiKey&city=$city";

        $response = Zttp::get($weatherbitApi);

        $data = $response->json()['data'][0];

        return response()->json($data);
    }
}
