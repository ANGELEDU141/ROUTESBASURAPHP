<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proveedores_', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('tipo_empresa',100);
            $table->string('email',100)->unique();
            $table->string('telefono',100);
            $table->text('direccion',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores_');
    }
};
