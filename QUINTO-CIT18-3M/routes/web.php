<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return 'Hello, Laravel!';
});

use App\Http\Controllers\GreetController;

Route::get('/greetblade', [GreetController::class, 'show']);
