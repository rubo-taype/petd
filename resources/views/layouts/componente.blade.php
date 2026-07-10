@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold text-primary">

                {{ $titulo }}

            </h2>

            <h5 class="text-muted">

                {{ $subtitulo }}

            </h5>

        </div>

        <a href="/dashboard" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left"></i>

            Dashboard

        </a>

    </div>

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            @yield('componente')

        </div>

    </div>

</div>

@endsection