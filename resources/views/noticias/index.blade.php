<h1>Listas Noticias</h1>
<a href="{{route('home')}}">Volver a Home</a>
<br>
<br>
@auth
<a href="{{route('noticias.create')}}">Crear Noticia</a>
@endauth

<br>
<br>

 <ul>
    @foreach ($noticias as $noticia)
    

        <li>
            <a href="{{route('noticias.show',$noticia->idNoticia)}}">{{$noticia->tituloNoticia}}</a>
        {{--ver si al crear un enlace con $post->id como botones redirecciona a la pagina edit o lo borra 
            directamente--}}
        </li>
    
    @endforeach

</ul> 