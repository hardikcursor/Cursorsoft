<?php

use App\Http\Controllers\Front\FrontentController;
use Illuminate\Support\Facades\Route;


Route::prefix('front')->group(function () {
    Route::get('/', [FrontentController::class, 'index'])->name('front.index');
    Route::get('/service', [FrontentController::class, 'service'])->name('front.service');
    Route::get('/project', [FrontentController::class, 'project'])->name('front.project');
    Route::get('/contact', [FrontentController::class, 'contact'])->name('front.contact');
});

