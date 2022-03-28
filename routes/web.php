<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/criar', [AgendaController::class, 'create'])->name('agenda.criar');
Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
Route::get('agenda/{id}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
Route::put('agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update');
Route::delete('agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
