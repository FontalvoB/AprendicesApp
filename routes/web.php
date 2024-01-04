<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FichaInstructorController;
use App\Http\Controllers\ExportPDFController;
use Illuminate\Routing\RouteAction;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Ruta Ficha */
Route::resource('ficha', App\Http\Controllers\FichaController::class);

/* Ruta Aprendices */
Route::resource('aprendices',AprendicesController::class);

/*Exportar x ID*/
Route::get('/aprendices/{aprendice->id_aprendiz}',  [AprendicesController::class, 'show']);

/*Ruta Login */
Auth::routes();

Route::resource('instructor', App\Http\Controllers\InstructorController::class);
Route::resource('ficha-instructor', App\Http\Controllers\FichaInstructorController::class);

/*Ruta Importar */
Route::get('file-import-export', [ImportController::class, 'index'])->name('file-import-export');
Route::post('file-import', [ImportController::class, 'fileImport'])->name('file-import');


/*Ruta Home */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
