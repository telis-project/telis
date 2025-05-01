<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Telis\Documentation\Http\Controllers\DocumentationController;

Route::prefix('documentation')->name('documentation.')->group(function () {
    Route::get('/', DocumentationController::class)->name('index');
    Route::get('/{type}', DocumentationController::class)->name('show');
}); 