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

            <div class="alert alert-info mt-3">
                <i class="bi bi-info-circle"></i>
                Este módulo registra y documenta las jornadas de sensibilización realizadas
                como parte de la implementación del Programa de Evaluación para la
                Transformación Digital (PETD).
            </div>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    {{-- Solicitud --}}
    @include('sensibilizacion.solicitud')

    <br>

    {{-- Programación --}}
    @include('sensibilizacion.programacion')

    <br>

    {{-- Participantes --}}
    @include('sensibilizacion.participantes')

    <br>

    {{-- Evaluación --}}
    @include('sensibilizacion.evaluacion')

    <br>

    {{-- Reporte --}}
    @include('sensibilizacion.reporte')

    <div class="text-center mt-4 mb-5">

        <button
            type="button"
            class="btn btn-success btn-lg"
            id="guardarSensibilizacion">

            <i class="bi bi-check-circle"></i>

            Guardar y Finalizar

        </button>

    </div>

</div>

@endsection

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const boton = document.getElementById('guardarSensibilizacion');

    if(!boton) return;

    boton.addEventListener('click', function () {

        boton.disabled = true;

        boton.innerHTML = '<i class="bi bi-check-circle-fill"></i> Jornada registrada';

        boton.classList.remove('btn-success');

        boton.classList.add('btn-primary');

        setTimeout(function(){

            alert('La jornada de sensibilización fue registrada correctamente.');

            window.location.href='/dashboard';

        },1000);

    });

});

</script>

@endpush