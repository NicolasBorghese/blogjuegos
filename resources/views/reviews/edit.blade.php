<h1>Editar</h1>

<form action="{{route('reviews.update',$review->idReview)}}" method="POST">
    @method('PUT')
    @csrf
    Nombre de Usuario: <input type="text" name="idUser" value="{{old('idUser',$post->idUser)}}" readonly><br>
    Categoria: <input type="text" name="categoriaPost" value="{{old('categoriaPost',$post->categoriaPost)}}">
    <br>
    Nombre del Juego: <input type="text" name="nombreJuego" value="{{old('nombreJuego',$review->nombreJuego)}}"><br>
    Resumen: <input type="text" name="resumenReview" value="{{old('resumenReview',$review->resumenReview)}}"><br>
    Contenido: <input type="text" name="contenidoReview" value="{{old('contenidoReview',$review->contenidoReview)}}"><br>
    Puntaje: <input type="text" name="puntajeJuego" value="{{old('puntajeJuego',$review->puntajeJuego)}}"><br>
    Genero: <input type="text" name="generoJuego" value="{{old('generoJuego',$review->puntajeJuego)}}"><br>

    <button type="submit">Crear</button>
</form>