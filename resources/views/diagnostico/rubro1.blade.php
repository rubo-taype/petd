<div class="card shadow-sm border-0">

    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            Rubro 1 - Conocimiento Técnico y Cultura de Interoperabilidad
        </h5>
    </div>

    <div class="card-body">

        <div class="alert alert-info">
            <strong>Instrucciones:</strong>
            Seleccione el nivel que mejor represente la situación actual de la entidad.
        </div>

        @include('components.pregunta',[
            'numero'=>1,
            'pregunta'=>'¿La entidad conoce el concepto de interoperabilidad?'
        ])

        @include('components.pregunta',[
            'numero'=>2,
            'pregunta'=>'¿El personal conoce la Política Nacional de Transformación Digital?'
        ])

        @include('components.pregunta',[
            'numero'=>3,
            'pregunta'=>'¿La entidad ha participado en proyectos de interoperabilidad?'
        ])

        @include('components.pregunta',[
            'numero'=>4,
            'pregunta'=>'¿Existe compromiso institucional para implementar interoperabilidad?'
        ])

        @include('components.pregunta',[
            'numero'=>5,
            'pregunta'=>'¿El personal posee competencias técnicas suficientes para implementar interoperabilidad?'
        ])

        <hr>

        <div class="text-end">

        <button
            class="btn btn-success"
            id="guardarRubro1">

            <i class="bi bi-check-circle"></i>

            Guardar y Continuar

        </button>




        </div>

    </div>

</div>