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
        Schema::create('usuario', function (Blueprint $table) {

            $table->string('nombreCuenta')->primary();
            $table->string('rol');
            $table->string('nombreUsuario');
            $table->string('email')->unique();
            $table->string('contrasena');
            $table->string('imgUsuario')->nullable();
            $table->date('fechaDeshabilitado')->nullable();
            $table->timestamps();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
