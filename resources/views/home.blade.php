@extends('layouts.app')
@section('title', 'Home')
@section('content')

<h1>Home</h1>

<a href="{{route('noticias.index')}}">NOTICIAS</a> 
<a href="{{route('reviews.index')}}">REVIEWS</a>
{{-- <a href="{{route('login')}}">LOGIN</a>
<a href="{{route('register')}}">REGISTER</a> --}}
@endsection