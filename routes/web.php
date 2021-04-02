<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('home', function () {
    return view('index');
});

Route::get('projects', function () {
    return view('projects');
});

/*Route::get('contact', function () {
    return view('contact');
}); */

Route::get('offerte', function () {
    return view('offerte');
});

Route::get('contact', 'App\Http\Controllers\ContactFormController@create');
Route::post('contact', 'App\Http\Controllers\ContactFormController@store');

Route::get('offerte', 'App\Http\Controllers\OfferteFormController@create');
Route::post('offerte', 'App\Http\Controllers\OfferteFormController@store');