@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-primary">

                Componente 1

            </h2>

            <p class="text-muted">

                Diagnóstico del Nivel de Madurez de la Interoperabilidad

            </p>

        </div>

        <a href="/diagnostico/wizard" class="btn btn-primary">

            Iniciar Diagnóstico

        </a>

    </div>

    <div class="row g-4">

        <div class="col-md-3">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6>Solicitudes</h6>

                    <h2>18</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6>Programadas</h6>

                    <h2>12</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6>Finalizadas</h6>

                    <h2>9</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6>Nivel Promedio</h6>

                    <h2>82%</h2>

                </div>

            </div>

        </div>

    </div>

    <div class="card mt-5 shadow">

        <div class="card-header bg-primary text-white">

            Flujo del Diagnóstico

        </div>

        <div class="card-body">

            <div class="row text-center">

                <div class="col">

                    Solicitud

                </div>

                <div class="col">

                    →

                </div>

                <div class="col">

                    Programación

                </div>

                <div class="col">

                    →

                </div>

                <div class="col">

                    Evaluación

                </div>

                <div class="col">

                    →

                </div>

                <div class="col">

                    Resultados

                </div>

                <div class="col">

                    →

                </div>

                <div class="col">

                    Reporte

                </div>

            </div>

        </div>

    </div>

</div>

@endsection