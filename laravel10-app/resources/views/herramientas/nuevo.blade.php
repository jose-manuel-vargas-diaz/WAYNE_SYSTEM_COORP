@extends('layouts.wayne')

@section('title', 'Wayne System | Registrar equipo')

@section('content')
<section class="page-hero compact">
    <p class="eyebrow">Inventario</p>
    <h1>Registrar equipo</h1>
    <p>Agrega laptops o equipos con su precio y stock disponible.</p>
</section>

<section class="section-box">
    @if ($errors->any())
        <div class="validation-alert" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="tool-form" action="/herramientas/nuevo" method="POST">
        @csrf

        <div class="form-field">
            <label for="nombre">Nombre del equipo</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ej: Laptop Lenovo IdeaPad 5">
        </div>

        <div class="form-field">
            <label for="precio">Precio en Bs</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" placeholder="4500">
        </div>

        <div class="form-field">
            <label for="stock">Stock disponible</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}" min="0" placeholder="0">
        </div>

        <button type="submit" class="btn btn-primary">Registrar equipo</button>
    </form>

    <div style="margin-top: 1rem; text-align: center;">
        <a class="simple-link" href="/herramientas">Volver al inventario</a>
    </div>
</section>
@endsection
