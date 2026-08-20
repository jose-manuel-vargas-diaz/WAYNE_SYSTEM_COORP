<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayne System | Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <div class="admin-heading"><div><p class="eyebrow">Centro de atención</p><h1>Hola, {{ Auth::user()->name ?? 'Admin' }}</h1><p>Responde consultas y prepara pedidos desde un solo lugar.</p></div><a href="{{ route('home') }}" class="btn btn-primary">Ver sitio <i class="fas fa-arrow-up-right-from-square"></i></a></div>
            <section class="admin-section">
                <div class="admin-section-title"><h2><i class="fas fa-inbox"></i> Comunicados recibidos</h2><span class="admin-count">{{ $comunicados->count() }}</span></div>
                <div class="admin-table-wrap">
                    @forelse($comunicados as $comunicado)
                        <article class="message-row">
                            <div class="message-main"><div class="message-name">{{ $comunicado->nombre }} <span>{{ $comunicado->tipo_consulta }}</span></div><p>{{ $comunicado->mensaje }}</p><small>{{ $comunicado->email }} · {{ $comunicado->telefono ?: 'Sin teléfono' }} · {{ $comunicado->created_at->format('d/m/Y H:i') }}</small></div>
                            @if($comunicado->estado !== 'atendido')
                                <form method="POST" action="{{ route('admin.comunicados.update', $comunicado) }}" class="status-form">@csrf @method('PATCH')<button type="submit" class="btn btn-dark">Marcar como atendido <i class="fas fa-check"></i></button></form>
                            @else
                                <span class="attended-label"><i class="fas fa-check-circle"></i> Atendido</span>
                            @endif
                        </article>
                    @empty
                        <p class="empty-state">Todavía no hay consultas recibidas.</p>
                    @endforelse
                </div>
            </section>
            <section class="admin-section">
                <div class="admin-section-title"><h2><i class="fas fa-file-invoice-dollar"></i> Nueva proforma</h2><span>Pedido</span></div>
                <form method="POST" action="{{ route('admin.proformas.store') }}" class="proforma-form">@csrf
                    <div class="form-field"><label for="cliente">Cliente</label><input id="cliente" name="cliente" required></div>
                    <div class="form-field"><label for="proforma-email">Correo</label><input id="proforma-email" type="email" name="email" required></div>
                    <div class="form-field"><label for="proforma-telefono">Teléfono</label><input id="proforma-telefono" name="telefono" required></div>
                    <div class="form-field"><label for="direccion">Dirección de entrega</label><input id="direccion" name="direccion"></div>
                    <div class="form-field form-field-wide"><label for="items">Detalle del pedido</label><textarea id="items" name="items" rows="5" placeholder="Laptop Lenovo IdeaPad | 1 | 4500&#10;Mouse inalámbrico | 1 | 80" required></textarea><small>Usa una línea por producto: detalle | cantidad | precio.</small></div>
                    <button type="submit" class="btn btn-dark">Guardar proforma <i class="fas fa-file-circle-plus"></i></button>
                </form>
            </section>
            <section class="admin-section">
                <div class="admin-section-title"><h2><i class="fas fa-receipt"></i> Proformas guardadas</h2><span class="admin-count">{{ $proformas->count() }}</span></div>
                <div class="proforma-list">
                    @forelse($proformas as $proforma)<article class="proforma-card"><div><strong>#{{ str_pad($proforma->id, 4, '0', STR_PAD_LEFT) }} · {{ $proforma->cliente }}</strong><p>{{ collect($proforma->items)->pluck('detalle')->join(' / ') }}</p></div><div class="proforma-actions"><div class="proforma-total">Bs. {{ number_format($proforma->total, 2) }}<span>{{ $proforma->estado }}</span></div><a class="btn btn-primary" href="{{ route('admin.proformas.download', $proforma) }}"><i class="fas fa-download"></i> Descargar</a></div></article>@empty<p class="empty-state">Aún no hay proformas creadas.</p>@endforelse
                </div>
            </section>

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
