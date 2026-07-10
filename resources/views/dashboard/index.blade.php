@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row mb-4">

        <div class="col-md-12">

            <h2 class="fw-bold">
                <i class="bi bi-speedometer2"></i>
                Dashboard PETD
            </h2>


            <div class="card border-0 shadow-sm mb-4">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col-md-8">

                            <h4 class="text-primary mb-1">

                                Programa de Evaluación para la Transformación Digital (PETD)

                            </h4>

                            <p class="mb-1">

                                <strong>Entidad:</strong> Municipalidad Provincial Demo

                            </p>

                            <p class="mb-1">

                                <strong>Estado del Piloto:</strong>

                                <span class="badge bg-success">IMPLEMENTADO</span>

                            </p>

                            <p class="mb-0">

                                <strong>Fecha:</strong> Julio 2026

                            </p>

                        </div>

                        <div class="col-md-4 text-center">

                            <h2 class="text-success mb-0">

                                100%

                            </h2>

                            <small class="text-muted">

                                Avance del PETD

                            </small>

                        </div>

                    </div>

                </div>

            </div>


            <p class="text-muted">
                Plataforma para la Evaluación de la Transformación Digital e Interoperabilidad
            </p>


                        <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-success text-white">

                    <h5 class="mb-0">

                        <i class="bi bi-clock-history"></i>

                        Última Actividad Registrada

                    </h5>

                </div>

                <div class="card-body">

                    <div id="ultimaActividad">

                        <div class="text-muted">

                            Aún no existen registros en el sistema.

                        </div>

                    </div>

                </div>

            </div>
    <div class="row">

        <!-- Diagnósticos -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body text-center">

                    <i class="bi bi-clipboard-data display-5 text-primary"></i>

                    <h5 class="mt-3">

                        Diagnósticos

                    </h5>

                  
                    <h2 id="totalDiagnosticos">

                        1

                    </h2>

                    <small class="text-success">

                        Diagnóstico completado

                    </small>

                </div>

            </div>

        </div>

        <!-- Capacitaciones -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body text-center">

                    <i class="bi bi-mortarboard display-5 text-success"></i>

                    <h5 class="mt-3">

                        Capacitaciones

                    </h5>

                    <h2>

                        1

                    </h2>

                </div>

            </div>

        </div>

        <!-- Acompañamientos -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body text-center">

                    <i class="bi bi-people display-5 text-warning"></i>

                    <h5 class="mt-3">

                        Acompañamientos

                    </h5>

                    <h2>

                        1

                    </h2>

                </div>

            </div>

        </div>

        <!-- Estrategias -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body text-center">

                    <i class="bi bi-diagram-3 display-5 text-danger"></i>

                    <h5 class="mt-3">

                        Estrategias

                    </h5>

                    <h2>

                        1

                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">

                Componentes del PETD

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 mb-3">

                    <a href="/diagnostico/wizard" class="btn btn-primary w-100 p-3">

                        <i class="bi bi-search"></i><br>

                        Diagnóstico del Nivel de Madurez

                    </a>

                </div>

                <div class="col-md-4 mb-3">

                    <a href="/sensibilizacion" class="btn btn-success w-100 p-3">

                        <i class="bi bi-megaphone"></i><br>

                        Sensibilización

                    </a>

                </div>

                <div class="col-md-4 mb-3">

                    <a href="/capacitacion" class="btn btn-warning w-100 p-3">

                        <i class="bi bi-mortarboard"></i><br>

                        Capacitación

                    </a>

                </div>

                <div class="col-md-6 mb-3">

                    <a href="/acompanamiento" class="btn btn-info w-100 p-3 text-white">

                        <i class="bi bi-people"></i><br>

                        Acompañamiento

                    </a>

                </div>

                <div class="col-md-6 mb-3">

                    <a href="/estrategia" class="btn btn-danger w-100 p-3">

                        <i class="bi bi-diagram-3"></i><br>

                        Estrategia de Interoperabilidad
                    </a>


<hr class="my-4">

<div class="row">

    <div class="col-md-12">

        <div class="card border-primary shadow-sm">

            <div class="card-header bg-primary text-white">

                <h5 class="mb-0">

                    Resumen Ejecutivo PETD

                </h5>

            </div>

            <div class="card-body">

                <div class="row text-center">

                    <div class="col-md-3">

                        <h6>Componentes</h6>

                        <h3>

                            5

                        </h3>

                    </div>

                    <div class="col-md-3">

                        <h6>Completados</h6>

                        <h3 id="componentesTerminados">

                            5

                        </h3>

                    </div>

                    <div class="col-md-3">

                        <h6>En proceso</h6>

                        <h3>

                            0

                        </h3>

                    </div>

                    <div class="col-md-3">

                        <h6>Pendientes</h6>

                        <h3>

                            0

                        </h3>

                    </div>

                </div>

                <hr>

                <div class="progress" style="height:28px">

                    <div

                        class="progress-bar bg-success"

                        style="width:20%">

                        20%

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



                </div>

            </div>

        </div>

    </div>

</div>

<hr class="mt-5">

<div class="card shadow-sm border-0">

    <div class="card-header bg-dark text-white">

        <h4 class="mb-0">

            Estado General del PETD

        </h4>

    </div>

    <div class="card-body">

        <table class="table table-hover align-middle">

            <thead class="table-light">

                <tr>

                    <th>Componente</th>

                    <th>Estado</th>

                    <th>Avance</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Diagnóstico</td>

                    <td>

                        <span class="badge bg-success">

                            Finalizado

                        </span>

                    </td>

                    <td>100%</td>

                </tr>

                <tr>

                    <td>Sensibilización</td>

                    <td>

                        <span class="badge bg-success">

                            Finalizado

                        </span>

                    </td>

                    <td>100%</td>

                </tr>

                <tr>

                    <td>Capacitación</td>

                    <td>

                        <span class="badge bg-success">

                            Finalizado

                        </span>

                    </td>

                    <td>100%</td>

                </tr>

                <tr>

                    <td>Acompañamiento</td>

                    <td>

                        <span class="badge bg-success">

                            Finalizado

                        </span>

                    </td>

                    <td>100%</td>

                </tr>

                <tr>

                    <td>Estrategia</td>

                    <td>

                        <span class="badge bg-success">

                            Finalizado

                        </span>

                    </td>

                    <td>100%</td>

                </tr>

            </tbody>

        </table>

        <hr>

        <h5>

            Avance General del Programa

        </h5>

        <div class="progress" style="height:25px;">

            <div

                class="progress-bar bg-success"

                style="width:100%;">

                20%

            </div>

        </div>

    </div>

</div>

<div class="row mt-5">

    <div class="col-md-8">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-primary text-white">

                <h5 class="mb-0">

                    Indicadores del PETD

                </h5>

            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <thead class="table-light">

                        <tr>

                            <th>Indicador</th>

                            <th>Valor</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Diagnósticos realizados</td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td>Jornadas de sensibilización</td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td>Capacitaciones</td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td>Acompañamientos</td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td>Estrategias formuladas</td>

                            <td>1</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-success text-white">

                <h5 class="mb-0">

                    Avance General

                </h5>

            </div>

            <div class="card-body text-center">

                <h2>

                    100%

                </h2>

                <div class="progress">

                    <div class="progress-bar bg-success"

                         style="width:100%">

                    </div>

                </div>

                <br>

                <small>

                    5 de 5 componentes implementados

                </small>

            </div>

        </div>

    </div>

</div>





<div class="card shadow-sm border-0 mt-4">

    <div class="card-header bg-success text-white">

        <h5 class="mb-0">

            Beneficios del Piloto PETD

        </h5>

    </div>

    <div class="card-body">

        <div class="row text-center">

            <div class="col-md-3">

                <i class="bi bi-check-circle-fill text-success fs-1"></i>

                <h6 class="mt-2">Diagnóstico realizado</h6>

            </div>

            <div class="col-md-3">

                <i class="bi bi-people-fill text-primary fs-1"></i>

                <h6 class="mt-2">Personal sensibilizado</h6>

            </div>

            <div class="col-md-3">

                <i class="bi bi-mortarboard-fill text-warning fs-1"></i>

                <h6 class="mt-2">Capacitación ejecutada</h6>

            </div>

            <div class="col-md-3">

                <i class="bi bi-diagram-3-fill text-danger fs-1"></i>

                <h6 class="mt-2">Estrategia formulada</h6>

            </div>

        </div>

    </div>

</div>



@endsection