<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::view('/dashboard', 'dashboard.index');

//Route::view('/diagnostico', 'diagnostico.index');
//Route::view('/sensibilizacion', 'sensibilizacion.index');
//Route::view('/capacitacion', 'capacitacion.index');
//Route::view('/acompanamiento', 'acompanamiento.index');
//Route::view('/estrategia', 'estrategia.index');
//Route::view('/reportes', 'reportes.index');

Route::view('/diagnostico/solicitud','diagnostico.solicitud');

Route::view('/diagnostico/programacion','diagnostico.programacion');

Route::view('/diagnostico/evaluacion','diagnostico.evaluacion');

Route::view('/diagnostico/resultado','diagnostico.resultado');

Route::view('/diagnostico/reporte','diagnostico.reporte');
Route::view('/diagnostico/wizard','diagnostico.wizard');


Route::view('/sensibilizacion','sensibilizacion.index');

Route::view('/capacitacion','capacitacion.index');

Route::view('/acompanamiento','acompanamiento.index');

Route::view('/estrategia','estrategia.index');
Route::view('/capacitacion','capacitacion.index');

Route::view('/acompanamiento','acompanamiento.index');

Route::view('/estrategia','estrategia.index');
Route::view('/reportes', 'reportes.index');
Route::view('/diagnostico', 'diagnostico.index');