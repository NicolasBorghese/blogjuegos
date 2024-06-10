<h1>Editar Noticia</h1>
<form action="{{route('noticias.update',$noticia->idNoticia)}}" method="POST">
    @method('PUT')
    @csrf
    Nombre de Usuario: <input type="text" name="idUser" value="{{old('idUser',$post->idUser)}}" readonly><br>
    Categoria: <input type="text" name="categoriaPost" value="{{old('categoriaPost',$post->categoriaPost)}}">
    <br>
    Titulo: <input type="text" name="tituloNoticia" value="{{old('tituloNoticia',$noticia->tituloNoticia)}}"><br>
    Resumen: <input type="text" name="resumenNoticia" value="{{old('resumenNoticia',$noticia->resumenNoticia)}}"><br>
    Contenido: <input type="text" name="contenidoNoticia" value="{{old('contenidoNoticia',$noticia->contenidoNoticia)}}"><br>
    {{-- Imagen Previa: <input type="text" name="tituloNoticia"><br> --}}

    <button type="submit">Editar</button>
</form>