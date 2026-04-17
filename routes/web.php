<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
    'message' => 'API is running'
    ]);
});

Route::get('/health', function () {
    return response()->json([
    'message' => 'healthy'
    ]);
});

Route::get('/me', function () {
    return response()->json([
    'name' => 'Chibuike Daniel Okoroafor',
    'email' => 'Jonaschibuike114@gmail.com',
    'github' => 'https://github.com/danieljonazz'
    ]);
});