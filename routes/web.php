<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DocenteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

// ---------------Inicio User--------------//

    Route::get('/user', [UserController::class, 'index']);

// ---------------Fim User----------------//





//Administrador

    Route:: middleware(['administrador'])->group(function(){

        //Docente
        Route::get('/docente', [DocenteController::class, 'index'])->name('docente.index');
        Route::get('/docente/create', [DocenteController::class, 'create'])->name('docente.create');
        Route::post('/docente', [DocenteController::class, 'store'])->name('docente.store');
        Route::get('/docente/{docente}/edit', [DocenteController::class, 'edit']);
        Route::post('/docente/{docente}', [DocenteController::class, 'update']);
        Route::get('/docente/{docente}/view', [DocenteController::class, 'show']);
        Route::post('/docente/{docente}/destroy', [DocenteController::class, 'destroy']);
    });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
