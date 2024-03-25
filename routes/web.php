<?php

use App\Http\Controllers\HamidController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PortfolioController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('/index_education', [EducationController::class, 'index'])->name('education.index');
    Route::get('/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/store', [EducationController::class, 'store'])->name('education.store');
    Route::get('/edit/{education}', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('/update/{education}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('/destroy/{education}', [EducationController::class, 'destroy'])->name('education.destroy');





    Route::get('/experiences', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experiences', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::delete('/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experience.destroy');





    Route::get('portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::get('portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::post('portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('portfolios/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');
    Route::get('portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
    Route::put('portfolios/{portfolio}', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::delete('portfolios/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');
});


Route::get('/', [HamidController::class, 'home'])->name('hamid_home');

require __DIR__ . '/auth.php';
