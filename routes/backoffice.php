<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\HomeBackofficeController;
use App\Http\Controllers\Backoffice\PictureBackofficeController;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/home', [HomeBackofficeController::class, 'index'])->name('backoffice.home');

});

Route::post('/upload-photo', [PictureBackofficeController::class, 'upload'])->name('backoffice.upload.photo');
