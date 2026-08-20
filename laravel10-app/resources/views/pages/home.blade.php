@extends('layouts.wayne')

@section('title', 'Wayne System | Inicio')

@section('content')
<section class="hero-section">
    <div class="hero-copy">
        <p class="eyebrow">Soluciones digitales para tu negocio</p>
        <h1>Todo lo que necesitas en tecnología, soporte y software.</h1>
        <p>En Wayne System ayudamos a personas y empresas con ventas de equipos, licencias originales, reparación técnica y asesoría profesional.</p>
        <div class="hero-actions">
            <a href="{{ route('servicios') }}" class="btn btn-primary">Ver servicios</a>
            <a href="{{ route('contacto') }}" class="btn btn-dark">Contactar</a>
        </div>
    </div>

    <div class="hero-panel">
        <div class="panel-card">
            <i class="fas fa-laptop"></i>
            <h3>Venta de PC</h3>
            <p>Equipos para trabajo, estudio y gaming.</p>
        </div>
        <div class="panel-card accent">
            <i class="fas fa-shield-alt"></i>
            <h3>Software original</h3>
            <p>Licencias y herramientas confiables.</p>
        </div>
    </div>
</section>

<section class="section-box">
    <div class="section-title">
        <i class="fas fa-bolt"></i> Servicios <span>Wayne</span>
    </div>

    <div class="grid-3">
        <article class="feature-card">
            <i class="fas fa-laptop"></i>
            <h3>Venta de PC</h3>
            <p>Equipos de escritorio, portátiles y workstations con excelente rendimiento.</p>
            <span class="badge badge-red">Nuevo</span>
        </article>

        <article class="feature-card">
            <i class="fas fa-code"></i>
            <h3>Software original</h3>
            <p>Licencias, suites, antivirus y herramientas para empresas y hogares.</p>
            <span class="badge badge-red">+ Garantía</span>
        </article>

        <article class="feature-card">
            <i class="fas fa-screwdriver-wrench"></i>
            <h3>Reparación</h3>
            <p>Diagnóstico, mantenimiento y recambio de piezas con atención rápida.</p>
            <span class="badge badge-red">Rápido</span>
        </article>
    </div>
</section>

<section class="section-box alt">
    <div class="section-title">
        <i class="fas fa-desktop"></i> Computadoras <span>venta</span>
    </div>

    <div class="grid-3">
        <article class="feature-card">
            <i class="fas fa-gamepad"></i>
            <h3>PC Gamer</h3>
            <p>Potencia, velocidad y configuración ideal para gaming y creatividad.</p>
        </article>
        <article class="feature-card">
            <i class="fas fa-laptop"></i>
            <h3>Portátiles</h3>
            <p>Ideal para estudio, trabajo y uso profesional con gran autonomía.</p>
        </article>
        <article class="feature-card">
            <i class="fas fa-server"></i>
            <h3>Workstations</h3>
            <p>Equipos para CAD, edición y ambientes con alto rendimiento.</p>
        </article>
    </div>
</section>

<section class="contact-banner">
    <div class="section-title light">
        <i class="fas fa-address-card"></i> Contacto <span>Directo</span>
    </div>
    <div class="contact-grid">
        <span><i class="fas fa-user-tie"></i> José Manuel Vargas Diaz</span>
        <span><i class="fas fa-mobile-alt"></i> 77924003</span>
        <span><i class="fas fa-location-dot"></i> Quillacollo</span>
    </div>
</section>

@endsection
