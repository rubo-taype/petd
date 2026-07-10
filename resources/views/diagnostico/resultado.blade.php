<div class="card shadow-sm border-0">

    <div class="card-header bg-success text-white">

        <div class="d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Resultado del Diagnóstico
            </h4>

            <span class="badge bg-light text-success">
                Componente 1
            </span>

        </div>

    </div>

    <div class="card-body">

        <div class="row mb-4">

            <div class="col-md-4">

                <div class="card border-primary shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">

                            Rubro Evaluado

                        </h6>

                        <h4>

                            Conocimiento Técnico

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-success shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">

                            Puntaje

                        </h6>

                        <h2 id="resultadoPuntaje">

                            0 / 15

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-warning shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">

                            Nivel

                        </h6>

                        <h2 id="resultadoNivel">

                            BÁSICO

                        </h2>

                    </div>

                </div>

            </div>

        </div>

        <h5 class="mb-3">

            Nivel de Madurez

        </h5>

        <div class="progress mb-4" style="height:30px;">

            <div

                id="barraResultado"

                class="progress-bar bg-success"

                role="progressbar"

                style="width:0%">

                0%

            </div>

        </div>

        <div class="alert alert-primary">

            <h5>

                Resumen Ejecutivo

            </h5>

            <table class="table table-bordered table-hover">

                <thead class="table-light">

                    <tr>

                        <th>Rubro</th>

                        <th>Estado</th>

                        <th>Puntaje</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>

                            Conocimiento Técnico

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Completado

                            </span>

                        </td>

                        <td id="tablaConocimiento">

                            0 / 15

                        </td>

                    </tr>

                    <tr>

                        <td>

                            Procesos

                        </td>

                        <td>

                            <span class="badge bg-secondary">

                                Pendiente

                            </span>

                        </td>

                        <td>

                            --

                        </td>

                    </tr>

                    <tr>

                        <td>

                            Planificación

                        </td>

                        <td>

                            <span class="badge bg-secondary">

                                Pendiente

                            </span>

                        </td>

                        <td>

                            --

                        </td>

                    </tr>

                    <tr>

                        <td>

                            Infraestructura

                        </td>

                        <td>

                            <span class="badge bg-secondary">

                                Pendiente

                            </span>

                        </td>

                        <td>

                            --

                        </td>

                    </tr>

                </tbody>

            </table>



        <hr>

        <div class="row mt-4">

            <div class="col-md-6">

                <div class="card border-primary shadow-sm">

                    <div class="card-body">

                        <h5>

                            Recomendación del Sistema

                        </h5>

                        <p id="recomendacionSistema">

                            La entidad presenta un nivel básico de madurez.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card border-success shadow-sm">

                    <div class="card-body">

                        <h5>

                            Próxima Acción

                        </h5>

                        <p id="accionSistema">

                            Continuar con el siguiente rubro.

                        </p>

                    </div>

                </div>

            </div>

        </div>



        </div>

    </div>

</div>
