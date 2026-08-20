<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AtencionController;
use App\Models\Herramienta;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/servicios', function () {
    return view('pages.servicios');
})->name('servicios');

Route::get('/computadoras', function () {
    return view('pages.computadoras');
})->name('computadoras');

Route::get('/software', function () {
    return view('pages.software');
})->name('software');

Route::get('/reparacion', function () {
    return view('pages.reparacion');
})->name('reparacion');

Route::get('/contacto', function () {
    return view('pages.atencion');
})->name('contacto');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/contacto', [AtencionController::class, 'storeComunicado'])->name('contacto.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AtencionController::class, 'admin'])->name('admin');
    Route::patch('/admin/comunicados/{comunicado}', [AtencionController::class, 'updateComunicado'])->name('admin.comunicados.update');
    Route::post('/admin/proformas', [AtencionController::class, 'storeProforma'])->name('admin.proformas.store');
    Route::get('/admin/proformas/{proforma}/descargar', [AtencionController::class, 'descargarProforma'])->name('admin.proformas.download');
});

Route::get('/hola', function () {
    return 'Hola';
});

Route::get('/inicio', function () {
    return view('pages.home');
});

Route::get('/productos', function () {
    return view('pages.computadoras');
});

Route::get('/herramientas', function () {
    $herramientas = Herramienta::all();

    return view('herramientas', compact('herramientas'));
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas.nuevo');
});

Route::post('/herramientas/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer|min:0',
    ], [
        'nombre.required' => 'Escribí el nombre de la herramienta.',
        'precio.required' => 'Escribí el precio de la herramienta.',
        'precio.integer' => 'El precio se anota solo con cifras.',
        'stock.required' => 'El stock es obligatorio.',
        'stock.integer' => 'El stock debe ser un número entero.',
        'stock.min' => 'El stock no puede ser menor a 0.',
    ]);

    Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    return redirect('/herramientas');
});
