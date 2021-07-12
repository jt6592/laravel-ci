<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/fizzbuzz', function() {
    return '';
});

Route::get('/fizzbuzz/{num}', [TestController::class , 'index']);
