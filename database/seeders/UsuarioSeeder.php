<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario1 = new Usuario();
        $usuario1->nombreCuenta = 'admin';
        $usuario1->rol = 'administrador';
        $usuario1->nombreUsuario = 'adminTotal';
        $usuario1->email = 'adminTotal@mail.com';
        $usuario1->contrasena = bcrypt('1234');
        $usuario1->imgUsuario = 'perfil1';
        $usuario1->fechaDeshabilitado = null;
        $usuario1->save();

        $usuario2 = new Usuario();
        $usuario2->nombreCuenta = 'autor';
        $usuario2->rol = 'autor';
        $usuario2->nombreUsuario = 'autorNuevo';
        $usuario2->email = 'autorNuevo@mail.com';
        $usuario2->contrasena = bcrypt('1234');
        $usuario2->imgUsuario = 'perfil2';
        $usuario2->fechaDeshabilitado = null;
        $usuario2->save();

        $usuario3 = new Usuario();
        $usuario3->nombreCuenta = 'lector';
        $usuario3->rol = 'lector';
        $usuario3->nombreUsuario = 'lectorNuevo';
        $usuario3->email = 'lectorNuevo@mail.com';
        $usuario3->contrasena = bcrypt('1234');
        $usuario3->imgUsuario = 'perfil3';
        $usuario3->fechaDeshabilitado = null;
        $usuario3->save();
    }
}
