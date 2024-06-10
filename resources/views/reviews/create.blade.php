<h1>Crear</h1>

<form action="{{route('reviews.store')}}" method="POST">
    @csrf
    Nombre de Usuario: <input type="text" name="idUser" value="{{old('idUser')}}"><br>
    Categoria: <input type="text" name="categoriaPost" value="{{old('categoriaPost')}}">
    <br>
    Nombre del Juego: <input type="text" name="nombreJuego" value="{{old('nombreJuego')}}"><br>
    Resumen: <input type="text" name="resumenReview" value="{{old('resumenReview')}}"><br>
    Contenido: <input type="text" name="contenidoReview" value="{{old('contenidoReview')}}"><br>
    Puntaje: <input type="text" name="puntajeJuego" value="{{old('puntajeJuego')}}"><br>
    Genero: <input type="text" name="generoJuego" value="{{old('generoJuego')}}"><br>

    <button type="submit">Crear</button>
</form>