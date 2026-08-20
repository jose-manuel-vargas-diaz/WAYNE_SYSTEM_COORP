<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente', 'email', 'telefono', 'direccion', 'items', 'total', 'estado', 'archivo_path',
    ];

    protected $casts = [
        'items' => 'array',
        'total' => 'decimal:2',
    ];
}