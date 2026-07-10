@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-danger">

                Componente 5

            </h2>

            <h5 class="text-muted">

                Desarrollo de la Estrategia de Interoperabilidad

            </h5>

            <div class="alert alert-danger mt-3">

                <i class="bi bi-diagram-3-fill"></i>

                Este componente permite formular la Estrategia de Interoperabilidad
                de la entidad, definiendo objetivos, responsables e indicadores
                para fortalecer la transformación digital.

            </div>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-danger text-white">

            <h5 class="mb-0">

                Formulación de la Estrategia

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Objetivo Estratégico</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Responsable</label>

                    <input class="form-control">

                </div>

                <div class="col-md-4 mb-3">

                    <label>Fecha de inicio</label>

                    <input type="date" class="form-control">

                </div>

                <div class="col-md-4 mb-3">

                    <label>Fecha de término</label>

                    <input type="date" class="form-control">

                </div>

                <div class="col-md-4 mb-3">

                    <label>Estado</label>

                    <select class="form-select">

                        <option>Planificado</option>
                        <option>En ejecución</option>
                        <option>Finalizado</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Indicador</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Meta</label>

                    <input class="form-control">

                </div>

                <div class="col-12 mb-3">

                    <label>Descripción de la Estrategia</label>

                    <textarea class="form-control" rows="4"></textarea>

                </div>

            </div>

            <hr>

            <div class="alert alert-danger">

                <strong>Resultado esperado</strong>

                <br>

                La entidad cuenta con una Estrategia de Interoperabilidad
                definida, alineada con sus objetivos institucionales y con el
                Programa de Evaluación para la Transformación Digital (PETD).

            </div>

        </div>

    </div>

    <div class="text-center mt-4">

        <button
            class="btn btn-danger btn-lg"
            id="guardarEstrategia">

            <i class="bi bi-check-circle"></i>

            Guardar Estrategia

        </button>

    </div>

</div>

@endsection

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded',function(){

    const boton=document.getElementById('guardarEstrategia');

    if(!boton) return;

    boton.addEventListener('click',function(){

        boton.disabled=true;

        boton.classList.remove('btn-danger');

        boton.classList.add('btn-success');

        boton.innerHTML='<i class="bi bi-check-circle-fill"></i> Estrategia registrada';

        setTimeout(function(){

            alert('La Estrategia de Interoperabilidad fue registrada correctamente.');

            window.location='/dashboard';

        },1000);

    });

});

</script>

@endpush