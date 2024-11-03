<?php

use App\Http\Controllers\GetDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GetDataController::class, 'index']);
