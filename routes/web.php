<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/postech/{sklh}/cek', [HaiController::class, 'index']);

Route::get('/Nanad', function () {
    return view('welcome');
});
