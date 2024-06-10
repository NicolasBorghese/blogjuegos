<h1>Leer Noticia</h1>

<a href="{{ route('noticias.index') }}">Volver atras</a> {{-- ver con el profe, porque no tendria que andar asi --}}

 {{-- Agregar el if mas adelante para diferenciar entre post habilitado y no habilitados--}}
   
    <br>
    <h1>{{$noticia->tituloNoticia}}</h1>
    <br>
    <br>
    Resumen: {{$noticia->resumenNoticia}}
    <br>
    <br>
    Imagen/Posteado por: {{$user->name}}
    <br>
    <br>
    <p>{{$noticia->contenidoNoticia}}</p>
    <br>

    <a href="{{route('noticias.edit', $noticia->idNoticia)}}">Editar Post</a>