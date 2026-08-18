<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wayne System Corporation')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/wayne.css') }}">
</head>
<body>
<div class="page-shell">
    <header class="site-header">
        <div class="brand">
            <div class="brand-mark">W</div>
            <div class="brand-copy">
                <span class="brand-name">WAYNE</span>
                <span class="brand-sub">SYSTEM</span>
                <span class="brand-tag">CORPORATION</span>
            </div>
        </div>

        <div class="header-contact">
            <span><i class="fas fa-phone-alt"></i> 77924003</span>
            <span><i class="fas fa-map-pin"></i> Quillacollo</span>
        </div>
    </header>

    <nav class="main-nav">
        <a href="{{ route('home') }}"><i class="fas fa-house"></i> Inicio</a>
        <a href="{{ route('servicios') }}"><i class="fas fa-cogs"></i> Servicios</a>
        <a href="{{ route('computadoras') }}"><i class="fas fa-laptop"></i> Computadoras</a>
        <a href="{{ route('software') }}"><i class="fas fa-code"></i> Software</a>
        <a href="{{ route('reparacion') }}"><i class="fas fa-tools"></i> Reparación</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div><i class="fas fa-copyright"></i> 2026 Wayne System Corporation</div>
        <div><i class="fas fa-map-pin"></i> Quillacollo · Plaza Bolívar</div>
        <div><i class="fas fa-phone"></i> 77924003</div>
    </footer>
</div>
</body>
</html>
