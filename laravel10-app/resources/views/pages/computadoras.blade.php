@extends('layouts.wayne')

@section('title', 'Wayne System | Computadoras')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Computadoras</p>
    <h1>Equipos para trabajar, estudiar y jugar.</h1>
</section>

<section class="section-box">
    <div class="grid-3">
        <article class="feature-card">
            <i class="fas fa-desktop"></i>
            <h3>PC Gamer</h3>
            <p>Gráficos poderosos, memoria RAM alta y rendimiento para juegos y diseño.</p>
        </article>

        <article class="feature-card">
            <i class="fas fa-laptop"></i>
            <h3>Laptops</h3>
            <p>Portátiles ligeros y modernos para trabajo, estudio y productividad.</p>
        </article>

        <article class="feature-card">
            <i class="fas fa-server"></i>
            <h3>Workstations</h3>
            <p>Soluciones para edición, modelado, simulación y tareas exigentes.</p>
        </article>
    </div>
</section>

<section class="section-box alt">
    <div class="info-banner">
        <i class="fas fa-tag"></i>
        Precios competitivos · Garantía 2 años · Asesoría sin costo
    </div>
</section>
@endsection
