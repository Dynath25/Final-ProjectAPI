<?php

use App\Http\Controllers\MovieCategoryController;
use App\Http\Controllers\Api\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('MovieCategory')
    ->name('MovieCategory')
    ->group(function () {
        Route::get('/', [MovieCategoryController::class, 'index'])->name('index');
        Route::post('/', [MovieCategoryController::class, 'store'])->name('store');
        Route::get('/{MovieCategory}', [MovieCategoryController::class, 'show'])->name('show');
        Route::put('/{MovieCategory}', [MovieCategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [MovieCategoryController::class, 'destroy'])->name('destroy');
    });

Route::prefix('Movie')
    ->name('Movie')
    ->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('index');
        Route::post('/', [MovieController::class, 'store'])->name('store');
        Route::get('/{Movie}', [MovieController::class, 'show'])->name('show');
        Route::put('/{Movie}', [MovieController::class, 'update'])->name('update');
        Route::delete('/{id}', [MovieController::class, 'destroy'])->name('destroy');
    });