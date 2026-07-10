<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PETD - Plataforma de Evaluación para la Transformación Digital</title>

 


                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script type="module" src="{{ asset('js/app.js') }}"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

</head>

<body>

<div class="wrapper">

    @include('layouts.sidebar')

    <div class="main">

        @include('layouts.navbar')

        <main class="content p-4">

            @yield('content')

        </main>

        @include('layouts.footer')

    </div>

</div>

@stack('scripts')

</body>

</html>