<div class="card shadow-sm border-0 mb-4">

    <div class="card-body">

        <h6 class="fw-bold mb-3">
            {{ $numero }}. {{ $pregunta }}
        </h6>

        <div class="row g-3">

            <div class="col-md-4">

                <button type="button"
                        class="btn btn-outline-success w-100 opcion"
                        data-valor="3">

                    🟢 Alto

                </button>

            </div>

            <div class="col-md-4">

                <button type="button"
                        class="btn btn-outline-warning w-100 opcion"
                        data-valor="2">

                    🟡 Medio

                </button>

            </div>

            <div class="col-md-4">

                <button type="button"
                        class="btn btn-outline-danger w-100 opcion"
                        data-valor="1">

                    🔴 Bajo

                </button>

            </div>

        </div>

        <input type="hidden"
               class="puntaje"
               value="0">

    </div>

</div>