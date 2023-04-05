<?php

use App\Http\Controllers\KiosmulController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::resource('kiosmuls',KiosmulController::class);

Route::get('/', function () {
    return view('welcome');
});
