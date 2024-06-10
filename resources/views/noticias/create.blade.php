<h1>Crear Noticia</h1>
<form action="{{route('noticias.store')}}" method="POST">
    @csrf
    Nombre de Usuario: <input type="text" name="idUser"><br>
    Categoria: <input type="text" name="categoriaPost">
    <br>
    Titulo: <input type="text" name="tituloNoticia"><br>
    Resumen: <input type="text" name="resumenNoticia"><br>
    Contenido: <input type="text" name="contenidoNoticia"><br>
    {{-- Imagen Previa: <input type="text" name="tituloNoticia"><br> --}}

    <button type="submit">Crear</button>
</form>