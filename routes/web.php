<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cardController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\galeryController;
use App\Http\Controllers\gordenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\templateController;
use App\Models\gorden;

Route::get('/', [Homecontroller::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('datagorden', gordenController::class);
Route::resource('card', cardController::class);
Route::resource('galery', galeryController::class);
Route::get('template', [templateController::class, 'index'])->name('template');
// Route::get('/template/pilih', [HomeController::class, 'index'])->name('template');
Route::post('change/template', [templateController::class, 'changeTemplate'])->name('template.change');
Route::post('change/theme', [templateController::class, 'changetheme'])->name('theme.change');

Route::get('api', function () {
    return response()->json(gorden::all());
});
