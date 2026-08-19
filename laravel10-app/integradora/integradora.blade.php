<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ferretería El Tornillo')</title>
    <link rel="stylesheet" href="{{ asset('css/wayne.css') }}">
</head>
<body class="integradora-body">
    <main class="integradora-main">
        @yield('content')
    </main>

    <footer class="integradora-footer">
        Integradora - José Manuel Vargas Diaz - 18 de agosto de 2026
    </footer>
</body>
</html>
