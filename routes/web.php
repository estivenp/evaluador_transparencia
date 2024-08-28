<?php

use Illuminate\Support\Facades\Route;
use App\Infraestructura\Http\Controllers\PrincipalController;
use App\Infraestructura\Http\Controllers\PaginaWeb\VistaAgregarPaginaWebController;
use App\Infraestructura\Http\Controllers\PaginaWeb\AgregarPaginaWebController;
use App\Infraestructura\Http\Controllers\Caracteristica\MostrarCaracteristicaController;
use App\Infraestructura\Http\Controllers\Caracteristica\ObteneDatosCaracteristicaController;
use App\Infraestructura\Http\Controllers\Evaluacion\TablaResultadoController;
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

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/analizarPagina', [VistaAgregarPaginaWebController::class, 'index']);

Route::get('/mostrarCaracteristica', [MostrarCaracteristicaController::class, 'index']);

Route::get('/obtenerDatosCaracteristica', [ObteneDatosCaracteristicaController::class, 'obtenerDatos']);

Route::post('/agregarPagina', [AgregarPaginaWebController::class, 'agregar']);

Route::get('/evaluaciones', [TablaResultadoController::class, 'index'])->name('evaluaciones.index');