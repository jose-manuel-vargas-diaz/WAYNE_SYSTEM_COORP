@extends('layouts.wayne')

@section('title', 'Wayne System | Servicios')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Servicios</p>
    <h1>Soluciones tecnológicas para tu día a día.</h1>
</section>

<section class="section-box">
    <div class="grid-3 image-card-grid">
        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=80" alt="Laptop para trabajo">
            <i class="fas fa-laptop"></i>
            <h3>Venta de equipos</h3>
            <p>Computadoras, laptops y estaciones de trabajo listas para cada necesidad.</p>
        </article>

        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=700&q=80" alt="Código en pantalla">
            <i class="fas fa-code"></i>
            <h3>Licencias</h3>
            <p>Software original, activación y soporte para uso doméstico o empresarial.</p>
        </article>

        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=80" alt="Componentes electrónicos">
            <i class="fas fa-screwdriver-wrench"></i>
            <h3>Reparación</h3>
            <p>Diagnóstico, mantenimiento y soluciones rápidas para hardware y software.</p>
        </article>
    </div>
</section>

<section class="section-box alt">
    <div class="section-title">
        <i class="fas fa-check-circle"></i> Beneficios <span>incluidos</span>
    </div>
    <ul class="feature-list">
        <li><i class="fas fa-check-circle"></i> Atención personalizada</li>
        <li><i class="fas fa-check-circle"></i> Garantía en equipos</li>
        <li><i class="fas fa-check-circle"></i> Soporte técnico profesional</li>
        <li><i class="fas fa-check-circle"></i> Recomendación técnica según tu uso</li>
    </ul>
</section>
@endsection
