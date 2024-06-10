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
        Schema::create('comentario', function (Blueprint $table) {
            $table->id('idComentario');
            $table->string('nombreCuenta');
            $table->unsignedBigInteger('idPost');
            $table->text('contenidoComentario');
            $table->date('fechaDeshabilitado')->nullable();
            $table->timestamps();

            $table->foreign('nombreCuenta')->references('nombreCuenta')->on('usuario')->onDelete('cascade');
            $table->foreign('idPost')->references('idPost')->on('post')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentario');
    }
};
