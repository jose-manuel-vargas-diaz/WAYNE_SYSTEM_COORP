@extends('layouts.wayne')

@section('title', 'Wayne System | Atención al cliente')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Atención al cliente</p>
    <h1>Estamos listos para atender tu consulta.</h1>
    <p>Completa el formulario y cuéntanos qué equipo, servicio o solución necesitas.</p>
</section>

<section class="section-box contact-section">
    <div class="section-title"><i class="fas fa-comments"></i> Formulario de <span>consulta</span></div>
    @if(session('success'))
        <div class="success-alert">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="validation-alert"><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    <form method="POST" action="{{ route('contacto.store') }}" class="contact-form">
        @csrf
        <div class="form-field"><label for="nombre">Nombre completo</label><input id="nombre" name="nombre" value="{{ old('nombre') }}" required></div>
        <div class="form-field"><label for="email">Correo electrónico</label><input id="email" type="email" name="email" value="{{ old('email') }}" required></div>
        <div class="form-field"><label for="telefono">Teléfono</label><input id="telefono" name="telefono" value="{{ old('telefono') }}"></div>
        <div class="form-field"><label for="tipo_consulta">¿Qué necesitas?</label><select id="tipo_consulta" name="tipo_consulta" required><option value="">Selecciona una opción</option><option>Comprar laptop o PC</option><option>Comprar accesorios</option><option>Software y licencias</option><option>Reparación y mantenimiento</option><option>Otro servicio</option></select></div>
        <div class="form-field form-field-wide"><label for="mensaje">Cuéntanos tu consulta</label><textarea id="mensaje" name="mensaje" rows="6" required>{{ old('mensaje') }}</textarea></div>
        <button type="submit" class="btn btn-primary">Enviar consulta <i class="fas fa-paper-plane"></i></button>
    </form>
</section>
@endsection
