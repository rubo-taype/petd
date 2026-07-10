@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-info">

                Componente 4

            </h2>

            <h5 class="text-muted">

                Acompañamiento para el Desarrollo de la Estrategia de Interoperabilidad

            </h5>

            <div class="alert alert-info mt-3">

                <i class="bi bi-people-fill"></i>

                Este componente permite registrar el acompañamiento técnico brindado
                a la entidad durante la implementación de la Estrategia de
                Interoperabilidad.

            </div>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Volver al Dashboard

        </a>

    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-info text-white">

            <h5 class="mb-0">

                Registro de Acompañamiento

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Entidad</label>

                    <input class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Especialista</label>

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

                    </select>

                </div>

                <div class="col-md-4 mb-3">

                    <label>Estado</label>

                    <select class="form-select">

                        <option>En proceso</option>
                        <option>Finalizado</option>

                    </select>

                </div>

                <div class="col-12 mb-3">

                    <label>Actividad realizada</label>

                    <textarea rows="4" class="form-control"></textarea>

                </div>

                <div class="col-12 mb-3">

                    <label>Observaciones</label>

                    <textarea rows="3" class="form-control"></textarea>

                </div>

            </div>

            <hr>

            <div class="alert alert-info">

                <strong>Resultado esperado</strong>

                <br>

                La entidad recibe asistencia técnica para implementar correctamente
                la Estrategia de Interoperabilidad y fortalecer su nivel de madurez.

            </div>

        </div>

    </div>

    <div class="text-center mt-4">

        <button
            class="btn btn-info btn-lg text-white"
            id="guardarAcompanamiento">

            <i class="bi bi-check-circle"></i>

            Guardar Acompañamiento

        </button>

    </div>

</div>

@endsection

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded',function(){

    const boton=document.getElementById('guardarAcompanamiento');

    if(!boton) return;

    boton.addEventListener('click',function(){

        boton.disabled=true;

        boton.classList.remove('btn-info');

        boton.classList.add('btn-success');

        boton.innerHTML='<i class="bi bi-check-circle-fill"></i> Acompañamiento registrado';

        setTimeout(function(){

            alert('El acompañamiento fue registrado correctamente.');

            window.location='/dashboard';

        },1000);

    });

});

</script>

@endpush