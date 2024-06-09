@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<h1>Lista Noticias </h1>
<a href="{{route('home')}}">Volver a Home</a>
<br>
<br>
<a href="{{route('noticias.create')}}">Crear Noticia</a>

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

@endsection()