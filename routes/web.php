<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CarController;
use App\Models\Car;
use App\Models\User;

Route::get('/', function () {
    $user = User::all();
    $cars = Car::all();
    return view('welcome', compact('cars', 'user'));
})->name('home');

Route::get('/dashboard', function() {
    $email = auth()->user()->email;
    $cars = Car::all();
    return view('dashboard', compact('cars', 'email'));
})->middleware(['auth', 'verified'])->name('dashboard');
   




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('cars', CarController::class);

Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::post('/car', [CarController::class, 'store'])->name('car.store');
Route::get('/car/{car}', [CarController::class, 'show'])->name('car.show');
Route::get('/car/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/{car}', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/{car}', [CarController::class, 'destroy'])->name('car.destroy');

