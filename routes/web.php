<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [VacancyController::class,'index'])->middleware(['auth', 'verified'])->name('Vacancies.index');
Route::get('/Vacancies/create', [VacancyController::class,'create'])->middleware(['auth', 'verified'])->name('Vacancies.create');
Route::get('/Vacancies/{vacancy}/edit', [VacancyController::class,'edit'])->middleware(['auth', 'verified'])->name('Vacancies.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
