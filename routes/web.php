<?php

use App\Http\Controllers\Front\FrontentController;
use Illuminate\Support\Facades\Route;


Route::prefix('front')->group(function () {
    Route::get('/', [FrontentController::class, 'index'])->name('front.index');
});