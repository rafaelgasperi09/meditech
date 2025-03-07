<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(array('prefix' => 'consultation','middleware'=>['auth','verified']), function() {

    Route::get('/create', [ConsultationController::class, 'create'])->name('consultation.create');

});

Route::group(array('prefix' => 'clients','middleware'=>['auth','verified']), function() {

    Route::get('/', [ClientController::class, 'index'])->name('client.index');

    Route::get('/create', [ClientController::class, 'create'])->name('client.create');

    Route::post('/store', [ClientController::class, 'store'])->name('client.store');

    Route::get('/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');

    Route::post('/{id}/update', [ClientController::class, 'update'])->name('client.update');

    Route::delete('/{id}/delete', [ClientController::class, 'destroy'])->name('client.destroy');

});

Route::group(array('prefix' => 'patients','middleware'=>['auth','verified']), function() {

    Route::get('/', [PatientController::class, 'index'])->name('patient.index');

    Route::get('/create', [PatientController::class, 'create'])->name('patient.create');

    Route::post('/store', [PatientController::class, 'store'])->name('patient.store');

    Route::get('/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');

    Route::post('/{id}/update', [PatientController::class, 'update'])->name('patient.update');

    Route::delete('/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

});

require __DIR__.'/auth.php';
