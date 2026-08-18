@extends('layouts.wayne')

@section('title', 'Wayne System | Reparación')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Reparación</p>
    <h1>Soluciones rápidas para hardware y software.</h1>
</section>

<section class="section-box">
    <div class="grid-3">
        <article class="feature-card">
            <i class="fas fa-microchip"></i>
            <h3>Hardware</h3>
            <p>Reemplazo de piezas, limpieza interna y diagnóstico profesional.</p>
        </article>

        <article class="feature-card">
            <i class="fas fa-window-maximize"></i>
            <h3>Software y sistema</h3>
            <p>Reinstalaciones, configuraciones, virus, drivers y optimización.</p>
        </article>

        <article class="feature-card">
            <i class="fas fa-fan"></i>
            <h3>Mantenimiento</h3>
            <p>Mejora del rendimiento y cuidado preventivo de tus equipos.</p>
        </article>
    </div>
</section>

<section class="section-box alt">
    <div class="info-banner danger">
        <i class="fas fa-clock"></i>
        Reparación en 48 horas · Diagnóstico gratis
    </div>
</section>
@endsection
