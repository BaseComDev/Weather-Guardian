<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    
    public function searchWeather($city)
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        if ($response->successful()) {
            $data = $response->json();

            $advice = $this->getAdvice($data);

            return view('weatherGaurdian.result', compact('data', 'advice'));
        } else {
            return redirect()->back()->with('error', 'City not found.');
        }
    }

    private function getAdvice($data)
    {
        $description = $data['weather'][0]['description'];
        $temp = $data['main']['temp'];
        $humidity = $data['main']['humidity'];

        // Basic rules (fallback if no GPT)
        if ($temp > 35) {
            return "It's hot. Drink water, stay in shade, avoid caffeine.";
        } elseif ($temp < 10) {
            return "It's cold. Wear layers, eat warm food, avoid cold drinks.";
        } else {
            return "Weather is normal. Stay hydrated and enjoy your day.";
        }

        // OPTIONAL: Use OpenAI GPT call here
    }
}

}
