<?php
use App\Http\Controllers\StandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/drivers', function () {
    return view('drivers');
})->name('drivers');

Route::get('/teams', function () {
    return view('teams');
})->name('teams');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Standings routes handled by the StandingController
Route::get('/standings', [StandingController::class, 'index'])->name('standings.index'); // Show all standings
Route::get('/standings/create', [StandingController::class, 'create'])->name('standings.create'); // Show the form to create a new standing
Route::post('/standings', [StandingController::class, 'store'])->name('standings.store'); // Store a new standing
Route::get('/standings/{standing}/edit', [StandingController::class, 'edit'])->name('standings.edit'); // Show the form to edit a standing
Route::put('/standings/{standing}', [StandingController::class, 'update'])->name('standings.update'); // Update an existing standing
Route::delete('/standings/{standing}', [StandingController::class, 'destroy'])->name('standings.destroy'); // Delete a standing
