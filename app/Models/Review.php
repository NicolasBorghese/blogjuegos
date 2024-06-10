<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
       //Defino la tabla a la que se en la base de datos
       protected $table = "reviews";

       protected $primaryKey = 'idReview';

    protected $fillable = [
        'idPost', 'nombreJuego', 'resumenReview', 'contenidoReview', 'puntajeJuego', 'generoJuego', 'imgCard', 'imgPortada',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost', 'idPost');
    }

}
