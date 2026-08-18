<?php

use App\Http\Controllers\AuthController;
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
    return view('pages.home');
})->name('contacto');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
