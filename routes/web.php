<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WanController;


Route::get('/',[WanController::class,'home']);
Route::post('/start_ss',[WanController::class,'react']);


