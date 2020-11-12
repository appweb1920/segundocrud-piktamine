<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefController;


Route::get('/', function () {
    //return view('index');
    return redirect('/ref');
})->name('r-index');

Route::resource('/ref',RefController::class);

