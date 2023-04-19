<?php

use App\Http\Controllers\Admin\BadgeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('admin/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'create'])->name('profile.create');
    Route::post('admin/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
    Route::post('admin/language', [\App\Http\Controllers\Admin\LanguageController::class, 'store'])->name('language.create');
    Route::delete('admin/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('projects', ProjectController::class);
});


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//});

require __DIR__.'/auth.php';
