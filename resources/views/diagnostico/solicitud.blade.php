@extends('layouts.app')

@section('content')
@include('components.wizard')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-4">

        <div>
            <h2 class="fw-bold text-primary">
                Nueva Solicitud de Diagnóstico
            </h2>

            <p class="text-muted">
                Registro de solicitud por parte de la Entidad Pública.
            </p>
        </div>

        <a href="/diagnostico" class="btn btn-secondary">
            ← Regresar
        </a>

    </div>

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            Datos de la Entidad

        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Nombre de la Entidad
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Ej. Municipalidad Provincial de..."
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Sector

                        </label>

                        <select class="form-select">

                            <option>Seleccione...</option>
                            <option>Gobierno Nacional</option>
                            <option>Gobierno Regional</option>
                            <option>Gobierno Local</option>

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Responsable

                        </label>

                        <input
                            class="form-control"
                            type="text"
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Correo Electrónico

                        </label>

                        <input
                            class="form-control"
                            type="email"
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Fecha de Solicitud

                        </label>

                        <input
                            type="date"
                            class="form-control"
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Prioridad

                        </label>

                        <select class="form-select">

                            <option>Alta</option>
                            <option>Media</option>
                            <option>Baja</option>

                        </select>

                    </div>

                    <div class="col-12 mb-3">

                        <label class="form-label">

                            Observaciones

                        </label>

                        <textarea
                            class="form-control"
                            rows="4"></textarea>

                    </div>

                </div>

                <hr>

                <div class="text-end">

                    <a href="/diagnostico/programacion"
                       class="btn btn-primary btn-lg">

                        Registrar Solicitud

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection