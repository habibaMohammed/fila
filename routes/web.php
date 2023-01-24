<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('quote', function () {
    return view('quote');
});
Route::get('careers', function () {
    return view('careers');
});
Route::get('agriculture', function () {
    return view('agriculture');
});
Route::get('private', function () {
    return view('private_sector');
});
Route::get('climate', function () {
    return view('climate_change');
});
Route::get('resillience', function () {
    return view('resillience_programming');
});
Route::get('knowledge_management', function () {
    return view('knowledge_management');
});
Route::get('project', function () {
    return view('project');
});
Route::resource('/', HomeController::class);
Route::resource('slider', SliderController::class);