<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion')->nullable();
            $table->json('items');
            $table->decimal('total', 10, 2)->default(0);
            $table->string('estado')->default('borrador');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proformas');
    }
};