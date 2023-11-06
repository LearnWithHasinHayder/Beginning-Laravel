<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\WeatherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hi', [OstadController::class, 'sayHi']);

Route::get("/hello",[OstadController::class, 'hello']);

Route::get("/greet/{name?}",[OstadController::class, 'greet']);

Route::post("/form",[OstadController::class, 'samplePostRequest']);
Route::get("/form",[OstadController::class, 'sampleGetRequest']);

Route::get("/location",[WeatherController::class, 'location']);
Route::get('/weather/{location}',[WeatherController::class,'weather']);

Route::get('/test',[OstadController::class,'testParameters']);
