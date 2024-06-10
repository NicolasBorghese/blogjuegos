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
        Schema::create('noticia', function (Blueprint $table) {
            $table->id('idNoticia');
            $table->unsignedBigInteger('idPost');
            $table->string('tituloNoticia');
            $table->string('resumenNoticia');
            $table->text('contenidoNoticia');
            $table->string('imgCard');
            $table->string('imgPortada');
            $table->timestamps();

            $table->foreign('idPost')->references('idPost')->on('post')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticia');
    }
};
