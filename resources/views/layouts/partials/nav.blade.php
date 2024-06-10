<a href="/">Inicio</a>
{{--@guest muestra el link loging a aquellos que no hallan iniciado sesion
    @auth hace lo contrario, muestra los links que queremos que vea un user logeado
--}}
@guest
  <a href="{{route('login')}}">Login</a>
  <a href="{{route('register')}}">Register</a>
@else
    <a href="{{route('user.dashboard')}}">Dashboard</a>

    <form style="display:inline" action="{{route('logout')}}" method="POST">
        @csrf
        <a href="#"  onclick="this.closest('form').submit()">Logout</a>
    </form>

@endguest

@if (session('status'))

<br>
{{session('status')}}
    
@endif