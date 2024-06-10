<h1>Lista Reviews</h1>

<a href="{{route('home')}}">Volver a Home</a>
<br>
<br>
<a href="{{route('reviews.create')}}">Crear Review</a>

<br>
<br>

 <ul>
    @foreach ($reviews as $review)
    

        <li>
            <a href="{{route('reviews.show',$review->idReview)}}">{{$review->nombreJuego}}</a>
        {{--ver si al crear un enlace con $post->id como botones redirecciona a la pagina edit o lo borra 
            directamente--}}
        </li>
    
    @endforeach

</ul> 