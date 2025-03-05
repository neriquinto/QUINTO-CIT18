<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return 'Hello, Laravel!';
});

use App\Http\Controllers\GreetController;

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::post('/', [TaskController::class, 'store'])->name('task.store');
