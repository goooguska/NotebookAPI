<?php

use App\Http\Controllers\NotebookController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('notebook', [NotebookController::class, 'index']);
    Route::post('notebook', [NotebookController::class, 'store']);
    Route::get('notebook/{id}', [NotebookController::class, 'show']);
    Route::post('notebook/{id}', [NotebookController::class, 'update']);
    Route::delete('notebook/{id}', [NotebookController::class, 'destroy']);
});
