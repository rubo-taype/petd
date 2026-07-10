<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PETD - Plataforma de Evaluación para la Transformación Digital</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

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