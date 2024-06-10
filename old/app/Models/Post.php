<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Defino la tabla a la que se relaciona en la base de datos
    protected $table = "post";

    protected $primaryKey = 'idPost';

    protected $fillable = [
        'nombreCuenta', 'categoriaPost', 'fechaDeshabilitado',
    ];

    protected $casts = [
        'fechaDeshabilitado' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'nombreCuenta', 'nombreCuenta');
    }

    public function noticia()
    {
        return $this->hasOne(Noticia::class, 'idPost', 'idPost');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'idPost', 'idPost');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'idPost', 'idPost');
    }
}
