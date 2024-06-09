<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comentario1 = new Comentario();
        $comentario1->idComentario = 1;
        $comentario1->nombreCuenta = 'lector';
        $comentario1->idPost = 1;
        $comentario1->contenidoComentario = 'Hola, buena información';
        $comentario1->fechaDeshabilitado = null;
        $comentario1->save();

        $comentario2 = new Comentario();
        $comentario2->idComentario = 2;
        $comentario2->nombreCuenta = 'autor';
        $comentario2->idPost = 2;
        $comentario2->contenidoComentario = 'Muchas gracias!';
        $comentario2->fechaDeshabilitado = null;
        $comentario2->save();

    }
}
