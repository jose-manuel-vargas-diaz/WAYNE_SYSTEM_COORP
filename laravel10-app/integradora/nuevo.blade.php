@extends('layouts.integradora')

@section('title', 'Ferretería El Tornillo')

@section('content')
    <div class="form-page">
        <header class="form-header">
            <h1>Ferretería El Tornillo</h1>
            <h2>Registrar herramienta</h2>
        </header>

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
                <label for="nombre">Nombre de la herramienta</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            </div>

            <div class="form-field">
                <label for="precio">Precio en Bs</label>
                <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
            </div>

            <button type="submit">Registrar herramienta</button>
        </form>
        <a class="simple-link" href="/herramientas">Volver al inventario</a>
    </div>
@endsection
