<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function weather() {
        $baseUrl = 'https://api.openweathermap.org/data/2.5/weather?q=';
        $city = 'Athens';
        $country = 'Greece';
        $APIKey = env('OPENWEATHER_KEY');
        $fullUrl = "{$baseUrl}{$city},{$country}&limit=1&appid={$APIKey}&units=metric";

        $response = Http::get($fullUrl);

        $data = $response->json();

        return view('weather', ['weather' => $data]);
    }
}

