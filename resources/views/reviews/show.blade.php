<h1>Show</h1>

<a href="{{ route('reviews.index') }}">Volver atras</a> {{-- ver con el profe, porque no tendria que andar asi --}}

 {{-- Agregar el if mas adelante para diferenciar entre post habilitado y no habilitados--}}
   
    <br>
    <h1>{{$review->nombreJuego}}</h1>
    <br>
    <br>
    Genero: {{$review->generoJuego}}
    <br>
    <br>
    Imagen/Posteado por: {{$user->name}}
    <br>
    <br>
    Resumen: {{$review->resumenReview}}
    <br>
    <br>
    Puntaje: {{$review->puntajeJuego}}
    <br>
    <br>
    <p>{{$review->contenidoReview}}</p>
    <br>

    <a href="{{route('reviews.edit', $review->idReview)}}">Editar Post</a>