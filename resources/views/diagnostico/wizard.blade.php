@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Título -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-primary">
                Componente 1
            </h2>

            <h5 class="text-muted">
                Diagnóstico del Nivel de Madurez de la Interoperabilidad
            </h5>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    <!-- Barra de progreso -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <div class="d-flex justify-content-between mb-2">

                <strong>

                    Progreso del Diagnóstico

                </strong>

                <span>

                    Paso <span id="pasoActual">1</span> de 5

                </span>

            </div>

            <div class="progress" style="height:12px;">

                <div
                    class="progress-bar bg-success"
                    id="barra"
                    style="width:20%">
                </div>

            </div>

        </div>

    </div>

    <!-- Estado -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <div class="row text-center">

                <div class="col">

                    <span class="badge bg-primary p-3">

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

                        Evaluación

                    </span>

                </div>

                <div class="col">

                    <span class="badge bg-secondary p-3">

                        Resultado

                    </span>

                </div>

                <div class="col">

                    <span class="badge bg-secondary p-3">

                        Reporte

                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- CONTENIDO -->

    <div class="card shadow border-0">

        <div class="card-body" id="contenidoWizard">
            <div id="mensajeSistema"></div>

            <!-- ========================= -->

            <!-- PASO 1 -->

            <!-- ========================= -->

            <div class="wizard-step" id="step1">

                <h3 class="text-primary">

                    Solicitud de Diagnóstico

                </h3>

                <hr>

                <div class="row">


                



                <div class="col-md-6 mb-3">

                    <label>Entidad</label>

                    <input
                        id="entidad"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Responsable</label>

                    <input
                        id="responsable"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Correo</label>

                    <input
                        id="correo"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Fecha</label>

                    <input
                        id="fecha"
                        type="date"
                        class="form-control">

                </div>




                </div>

            </div>

            <!-- ========================= -->

            <!-- PASO 2 -->

            <!-- ========================= -->

           <div class="wizard-step d-none" id="step2">

                @include('diagnostico.programacion')

            </div>

            <!-- ========================= -->

            <!-- PASO 3 -->

            <!-- ========================= -->

            <div class="wizard-step d-none" id="step3">

                @include('diagnostico.rubro1')

            </div>

            <!-- ========================= -->

            <!-- PASO 4 -->

            <!-- ========================= -->

            <div class="wizard-step d-none" id="step4">

             @include('diagnostico.resultado')

            </div>

            <!-- ========================= -->

            <!-- PASO 5 -->

            <!-- ========================= -->

        <div class="wizard-step d-none" id="step5">

         @include('diagnostico.reporte')

        </div>

        </div>

    </div>

    <!-- Botones -->

    <div class="d-flex justify-content-between mt-4">

        <button
            class="btn btn-secondary"
            id="btnAnterior">

            ← Anterior

        </button>

        <button
            class="btn btn-primary"
            id="btnSiguiente">

            Siguiente →

        </button>

    </div>

</div>

@endsection