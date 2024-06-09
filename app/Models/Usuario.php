<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    //Defino la tabla a la que se en la base de datos
    protected $table = "usuario";

    protected $primaryKey = 'nombreCuenta';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nombreCuenta', 'rol', 'nombreUsuario', 'email', 'contrasena', 'imgUsuario', 'fechaDeshabilitado',
    ];

    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    protected $casts = [
        'fechaDeshabilitado' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'nombreCuenta', 'nombreCuenta');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'nombreCuenta', 'nombreCuenta');
    }
}
