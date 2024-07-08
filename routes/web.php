<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/demo1', [DemoController::class,'demo1']);
Route::get('/demo2', [DemoController::class,'demo2']);



