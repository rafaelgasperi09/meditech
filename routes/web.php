<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ClientController;
use \App\Http\Controllers\BranchController;
use \App\Http\Controllers\RoomController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\AppointmentController;
use \App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Pages/login');
})->name('login');

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

    Route::group(array('prefix' => 'branch','middleware'=>['auth','verified']), function() {

        Route::get('/create', [BranchController::class, 'create'])->name('client.branch.create');

        Route::post('/store', [BranchController::class, 'store'])->name('client.branch.store');

        Route::get('/{id}/edit', [BranchController::class, 'edit'])->name('client.branch.edit');

        Route::post('/{id}/update', [BranchController::class, 'update'])->name('client.branch.update');

        Route::delete('/{id}/delete', [BranchController::class, 'destroy'])->name('client.branch.destroy');
    });

    Route::group(array('prefix' => 'consulting_rooms','middleware'=>['auth','verified']), function() {

        Route::get('/create', [RoomController::class, 'create'])->name('client.room.create');

        Route::post('/store', [RoomController::class, 'store'])->name('client.room.store');

        Route::get('/{id}/edit', [RoomController::class, 'edit'])->name('client.room.edit');

        Route::post('/{id}/update', [RoomController::class, 'update'])->name('client.room.update');

        Route::delete('/{id}/delete', [RoomController::class, 'destroy'])->name('client.room.destroy');
    });

});

Route::group(array('prefix' => 'patients','middleware'=>['auth','verified']), function() {

    Route::get('/', [PatientController::class, 'index'])->name('patient.index');

    Route::get('/create', [PatientController::class, 'create'])->name('patient.create');

    Route::post('/store', [PatientController::class, 'store'])->name('patient.store');

    Route::get('/{id}/profile', [PatientController::class, 'profile'])->name('patient.profile');

    Route::get('/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');

    Route::post('/{id}/update', [PatientController::class, 'update'])->name('patient.update');

    Route::delete('/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

});

Route::group(array('prefix' => 'users','middleware'=>['auth','verified']), function() {

    Route::get('/', [UserController::class, 'index'])->name('user.index');

    Route::get('/create', [UserController::class, 'create'])->name('user.create');

    Route::post('/store', [UserController::class, 'store'])->name('user.store');

    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

    Route::post('/{id}/update', [UserController::class, 'update'])->name('user.update');

    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');

});

Route::group(array('prefix' => 'appointments','middleware'=>['auth','verified']), function() {

    Route::get('/', [AppointmentController::class, 'index'])->name('appointment.index');

    Route::get('/calendar', [AppointmentController::class, 'calendar'])->name('appointment.calendar');

    Route::get('/create', [AppointmentController::class, 'create'])->name('appointment.create');

    Route::post('/store', [AppointmentController::class, 'store'])->name('appointment.store');

    Route::get('/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');

    Route::post('/{id}/update', [AppointmentController::class, 'update'])->name('appointment.update');

    Route::delete('/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

});

Route::group(array('prefix' => 'api'), function() {

    Route::get('/diagnostics', [ApiController::class, 'diagnostics'])->name('api.diagnostics');
    Route::get('/cpts/{type}', [ApiController::class, 'cpts'])->name('api.cpts');
    Route::get('/medical_speciality', [ApiController::class, 'medicalSpeciality'])->name('api.medical_speciality');
    Route::get('/medicines', [ApiController::class, 'medicines'])->name('api.medicines');
    Route::get('/patients', [ApiController::class, 'patients'])->name('api.patients');
    Route::get('/users', [ApiController::class, 'users'])->name('api.users');

});


require __DIR__.'/auth.php';
