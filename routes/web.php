<?php

use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicleController;

Route::get('/', function () {
    return view('index');
});

Route::resource('cicles', CicleController::class);