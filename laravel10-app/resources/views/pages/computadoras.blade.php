@extends('layouts.wayne')

@section('title', 'Wayne System | Computadoras')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Computadoras</p>
    <h1>Equipos para trabajar, estudiar y jugar.</h1>
</section>

<section class="section-box">
    <div class="grid-3 image-card-grid">
        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=700&q=80" alt="PC Gamer">
            <i class="fas fa-desktop"></i>
            <h3>PC Gamer</h3>
            <p>Gráficos poderosos, memoria RAM alta y rendimiento para juegos y diseño.</p>
        </article>

        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=80" alt="Laptop portátil">
            <i class="fas fa-laptop"></i>
            <h3>Laptops</h3>
            <p>Portátiles ligeros y modernos para trabajo, estudio y productividad.</p>
        </article>

        <article class="feature-card image-card">
            <img src="https://images.unsplash.com/photo-1587831990711-23ca6441447b?auto=format&fit=crop&w=700&q=80" alt="Estación de trabajo">
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
