@extends('layouts.integradora')

@section('title', 'Ferretería El Tornillo')

@section('content')
    <div class="inventory-page">
        <header class="inventory-header">
            <h1>Ferretería El Tornillo</h1>
            <p>En nuestra ferretería de barrio encuentras herramientas confiables para cada reparación y proyecto.</p>
        </header>

        <div class="inventory-summary">
            <p>Hay <strong>{{ count($herramientas) }}</strong> herramientas en el inventario.</p>
        </div>

        <section class="tools-grid" aria-label="Herramientas registradas">
            @forelse ($herramientas as $herramienta)
                <article class="tool-card">
                    <h2>{{ $herramienta->nombre }}</h2>
                    <p>Precio: {{ $herramienta->precio }} Bs</p>
                </article>
            @empty
                <p class="empty-inventory">Todavía no hay herramientas registradas.</p>
            @endforelse
        </section>

        <p class="inventory-signature">Inventario atendido por José Manuel Vargas Diaz</p>
        <a class="simple-link" href="/herramientas/nuevo">Registrar una herramienta</a>
    </div>
@endsection
