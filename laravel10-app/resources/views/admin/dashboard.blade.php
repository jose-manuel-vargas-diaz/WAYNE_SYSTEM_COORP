<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayne System | Panel</title>
    <link rel="stylesheet" href="{{ asset('css/wayne.css') }}">
</head>
<body>
    <div class="admin-page">
        <div class="admin-shell">
            <div class="admin-topbar">
                <div>
                    <strong>WAYNE SYSTEM</strong>
                    <span> | Panel administrativo</span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">Cerrar sesión</button>
                </form>
            </div>

            <div class="admin-body">
                <h1>Bienvenido, {{ Auth::user()->name ?? 'Admin' }}</h1>
                <p>Desde aquí puedes administrar la información del sitio web y gestionar la empresa.</p>

                <div class="admin-grid">
                    <div class="admin-card">
                        <h3>Servicios</h3>
                        <p>Revisa y actualiza los servicios que ofrece la compañía.</p>
                    </div>

                    <div class="admin-card">
                        <h3>Computadoras</h3>
                        <p>Administra los equipos, laptops y equipos gamer disponibles.</p>
                    </div>

                    <div class="admin-card">
                        <h3>Software</h3>
                        <p>Controla paquetes de software, licencias y soluciones digitales.</p>
                    </div>

                    <div class="admin-card">
                        <h3>Reparaciones</h3>
                        <p>Gestiona el soporte técnico y pedidos de reparación.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
