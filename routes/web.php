<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return redirect()->route('index');
});


Auth::routes();


Route::get('/index',[HomeController::class, 'index'])->name('index');
Route::get('/weather', [WeatherController::class],'showweather')    ->name('weather');
