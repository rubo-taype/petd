@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-primary">

                Reporte Ejecutivo PETD

            </h2>

            <p class="text-muted">

                Resumen de la implementación del Programa de Evaluación para la Transformación Digital

            </p>

        </div>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                Resumen General

            </h4>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-light">

                    <tr>

                        <th>Componente</th>

                        <th>Estado</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Diagnóstico</td>

                        <td><span class="badge bg-success">Completado</span></td>

                    </tr>

                    <tr>

                        <td>Sensibilización</td>

                        <td><span class="badge bg-success">Completado</span></td>

                    </tr>

                    <tr>

                        <td>Capacitación</td>

                        <td><span class="badge bg-success">Completado</span></td>

                    </tr>

                    <tr>

                        <td>Acompañamiento</td>

                        <td><span class="badge bg-success">Completado</span></td>

                    </tr>

                    <tr>

                        <td>Estrategia de Interoperabilidad</td>

                        <td><span class="badge bg-success">Completado</span></td>

                    </tr>

                </tbody>

            </table>

            <hr>

            <h5>Nivel de Madurez</h5>

            <div class="progress mb-3" style="height:25px;">

                <div class="progress-bar bg-success" style="width:85%;">

                    85%

                </div>

            </div>

            <div class="alert alert-success">

                <strong>Conclusión</strong>

                <br>

                La entidad culminó satisfactoriamente la implementación del piloto del PETD,
                ejecutando los cinco componentes establecidos y fortaleciendo su proceso
                de Transformación Digital e Interoperabilidad.

            </div>

            <h5>Recomendaciones</h5>

            <ul>

                <li>Continuar con la implementación progresiva del PETD.</li>

                <li>Actualizar periódicamente los indicadores.</li>

                <li>Mantener las capacitaciones al Comité de Gobierno Digital.</li>

                <li>Realizar nuevas evaluaciones de madurez anualmente.</li>

            </ul>

        </div>

    </div>

</div>

@endsection