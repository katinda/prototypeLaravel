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

Route::name('home')->get('/', function () {
    $isWeekend = date('N') >= 6;
    //dd( $isWeekend);
    $name = " <h1>Je suis le meilleur de ma génération</h1>";

    return view('welcome',compact('name'));
});

Route::name('about')->get('/about', function () {
    $isWeekend = date('N') >= 6;
    return view('pages/about');
});    

Route::name('help')->get('/help', function () {
    $isWeekend = date('N') >= 6;
    return view('pages/help');
});

Route::get('/events', function () {
    $events = [
        'Make PHP Great Again',
        'PHP Conference',
        'Meetup TDN',
        'Laravel Conference'
    ];

    return view('events/index',compact('events'));
});

