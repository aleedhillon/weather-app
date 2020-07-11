<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $apiKey = config('services.openweathermap.key');
        $lat = $request->lat;
        $lon = $request->lon;

        $response = Zttp::get("https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&appid=$apiKey");

        Log::channel('debug')->info('Weather Response', ['date' => $response->json(JSON_PRETTY_PRINT)]);

        return $response->json();
    }
}
