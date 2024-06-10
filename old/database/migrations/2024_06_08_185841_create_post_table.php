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
        Schema::create('post', function (Blueprint $table) {
            $table->id('idPost');
            $table->string('nombreCuenta');
            $table->string('categoriaPost');
            $table->date('fechaDeshabilitado')->nullable();
            $table->timestamps();

            $table->foreign('nombreCuenta')->references('nombreCuenta')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
