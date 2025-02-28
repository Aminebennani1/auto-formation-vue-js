<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Models\Apprenant;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/apprenant', [ApprenantController::class, 'index']);

// Route::get('/{any}',function(){
//     return view('welcome');
// })->where('any','.*');