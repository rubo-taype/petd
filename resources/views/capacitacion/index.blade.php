@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-warning">

                Componente 3

            </h2>

            <h5 class="text-muted">

                Capacitación en Materia de Interoperabilidad

            </h5>

            <div class="alert alert-warning mt-3">

                <i class="bi bi-mortarboard-fill"></i>

                Este componente registra las capacitaciones dirigidas al Comité de Gobierno y
                Transformación Digital para fortalecer sus competencias en interoperabilidad.

            </div>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-warning">

            <h5 class="mb-0">

                Registro de Capacitación

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Tema</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Instructor</label>

                    <input class="form-control">

                </div>

                <div class="col-md-4 mb-3">

                    <label>Fecha</label>

                    <input type="date" class="form-control">

                </div>

                <div class="col-md-4 mb-3">

                    <label>Modalidad</label>

                    <select class="form-select">

                        <option>Presencial</option>

                        <option>Virtual</option>

                        <option>Híbrida</option>

                    </select>

                </div>

                <div class="col-md-4 mb-3">

                    <label>Número de participantes</label>

                    <input type="number" class="form-control">

                </div>

                <div class="col-12 mb-3">

                    <label>Objetivo de la capacitación</label>

                    <textarea rows="4" class="form-control"></textarea>

                </div>

            </div>

            <hr>

            <div class="alert alert-success">

                <strong>Resultado esperado</strong>

                <br>

                Los miembros del Comité fortalecen sus conocimientos sobre interoperabilidad y transformación digital.

            </div>

        </div>

    </div>

    <div class="text-center mt-4">

        <button
            type="button"
            class="btn btn-warning btn-lg"
            id="guardarCapacitacion">

            <i class="bi bi-check-circle"></i>

            Guardar Capacitación

        </button>

    </div>

</div>

@endsection

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded',function(){

    const boton=document.getElementById('guardarCapacitacion');

    if(!boton) return;

    boton.addEventListener('click',function(){

        boton.disabled=true;

        boton.classList.remove('btn-warning');

        boton.classList.add('btn-success');

        boton.innerHTML='<i class="bi bi-check-circle-fill"></i> Capacitación registrada';

        setTimeout(function(){

            alert('La capacitación fue registrada correctamente.');

            window.location='/dashboard';

        },1000);

    });

});

</script>

@endpush