<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayne System | Login</title>
    <link rel="stylesheet" href="{{ asset('css/wayne.css') }}">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-mark">W</div>
                <h2>WAYNE SYSTEM</h2>
                <p>Panel administrativo</p>
            </div>

            <div class="auth-body">
                @if ($errors->any())
                    <div class="auth-alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Ingrese su usuario" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="password" placeholder="Ingrese su contraseña" required>
                    </div>

                    <button type="submit" class="auth-btn">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
