<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\HomeBackofficeController;

Route::middleware(['auth', 'verified'])->group(function () {

    // rutes del backoffice
    Route::get('/home', [HomeBackofficeController::class, 'index'])->name('backoffice.home');

});
