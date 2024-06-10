<h1>Crear una Noticia</h1>

<form action="{{route('noticias.store')}}" method="POST">
    @csrf
    Nombre de Usuario: <input type="text" name="nombreCuenta"><br>
    Categoria: <select name="caetgoriaPost">
                    <option value="review">Review</option>
                    <option value="noticia">Noricia</option>
                </select>
    <br>
    Titulo: <input type="text" name="tituloNoticia"><br>
    Resumen: <input type="text" name="resumenNoticia"><br>
    Contenido: <input type="text" name="contenidoNoticia"><br>
    {{-- Imagen Previa: <input type="text" name="tituloNoticia"><br> --}}

    <button type="submit">Crear</button>
</form>