@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-success">
                Componente 2
            </h2>

            <h5 class="text-muted">
                Sensibilización sobre la Relevancia de la Interoperabilidad
            </h5>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    <!-- Barra de progreso -->

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            <div class="d-flex justify-content-between">

                <strong>Avance del Componente</strong>

                <span>Paso 1 de 5</span>

            </div>

            <div class="progress mt-2">

                <div class="progress-bar bg-success"
                     style="width:20%">

                </div>

            </div>

        </div>

    </div>

    <!-- Flujo -->

    <div class="row text-center mb-4">

        <div class="col">

            <span class="badge bg-success p-3">
                Solicitud
            </span>

        </div>

        <div class="col">

            <span class="badge bg-secondary p-3">
                Programación
            </span>

        </div>

        <div class="col">

            <span class="badge bg-secondary p-3">
                Participantes
            </span>

        </div>

        <div class="col">

            <span class="badge bg-secondary p-3">
                Evaluación
            </span>

        </div>

        <div class="col">

            <span class="badge bg-secondary p-3">
                Reporte
            </span>

        </div>

    </div>

    <!-- Formulario -->

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            Solicitud de Sensibilización

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Entidad</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Responsable</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Correo</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Fecha</label>

                    <input type="date" class="form-control">

                </div>

            </div>

        </div>

    </div>

    <div class="d-flex justify-content-end mt-4">

        <button class="btn btn-success">

            Siguiente →

        </button>

    </div>

</div>

@endsection