<?php

use Illuminate\Support\Facades\Route;

use Native\Mobile\Facades\Geolocation;


Route::get('/', function () {
    return view('islamic-app');
});


Route::get('/request-location', function () {
    Geolocation::requestPermissions();
    return response()->json(['status' => 'requested']);
});

Route::get('/get-location', function () {
    Geolocation::getCurrentPosition(true); // true = GPS دقيق
    return response()->json(['status' => 'requested']);
});
