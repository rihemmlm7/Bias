<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TankController;

// Define the route for the homepage
Route::get('/', [TankController::class, 'index']);
