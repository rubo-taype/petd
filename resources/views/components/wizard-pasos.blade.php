<div class="card shadow-sm border-0 mb-4">

    <div class="card-body">

        <div class="d-flex justify-content-between mb-2">

            <strong>

                {{ $titulo }}

            </strong>

            <span>

                Paso {{ $paso }} de {{ $total }}

            </span>

        </div>

        <div class="progress">

            <div

                class="progress-bar bg-success"

                style="width: {{ ($paso/$total)*100 }}%">

            </div>

        </div>

    </div>

</div>