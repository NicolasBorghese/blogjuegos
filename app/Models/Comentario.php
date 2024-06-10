<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
       //Defino la tabla a la que se en la base de datos
       protected $table = "cometarios";
       protected $primaryKey = 'idComentario';

    protected $fillable = [
        'nombreCuenta', 'idPost', 'contenidoComentario', 'fechaDeshabilitado',
    ];

    protected $casts = [
        'fechaDeshabilitado' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nombreCuenta', 'nombreCuenta');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost', 'idPost');
    }
}
