@extends('layouts.wayne')

@section('title', 'Wayne System | Inventario')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Inventario</p>
    <h1>Stock de laptops y equipos disponibles</h1>
    <p>Consulta el inventario activo con precios y unidades disponibles para venta y soporte.</p>
</section>

<section class="section-box">
    <div class="section-title">
        <i class="fas fa-laptop"></i> Equipos <span>disponibles</span>
    </div>

    <div class="grid-3">
        @forelse ($herramientas as $herramienta)
            <article class="feature-card">
                <i class="fas fa-laptop"></i>
                <h3>{{ $herramienta->nombre }}</h3>
                <p>Precio: {{ $herramienta->precio }} Bs</p>
                <p>Stock: <strong>{{ $herramienta->stock }}</strong></p>
                <span class="badge {{ $herramienta->stock > 0 ? 'badge-red' : 'badge-dark' }}">
                    {{ $herramienta->stock > 0 ? 'Disponible' : 'Sin stock' }}
                </span>
            </article>
        @empty
            <p class="empty-state">Todavía no hay equipos registrados en el inventario.</p>
        @endforelse
    </div>
</section>

<section class="section-box alt">
    <div class="info-banner">
        <i class="fas fa-boxes-stacked"></i>
        Inventario actualizado · Stock real · Atención directa
    </div>
    <div style="margin-top: 1.5rem; text-align: center;">
        <a href="/herramientas/nuevo" class="btn btn-primary">Registrar equipo</a>
    </div>
</section>
@endsection
