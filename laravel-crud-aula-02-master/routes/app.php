<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Breeze Auth Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Protected Routes (somente logado)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {


    Route::resource('/cliente', ClienteController::class);
    Route::resource('/carro', CarroController::class);
    Route::resource('/ticket', TicketController::class);

    Route::put('/ticket/{id}/saida', [TicketController::class, 'darSaida'])
        ->name('ticket.saida');
});