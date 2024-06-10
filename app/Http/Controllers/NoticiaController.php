<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Noticia;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){

        $noticias = Noticia::orderBy('idNoticia','desc')->get();

        return view('noticias.index', compact('noticias'));
    }

    public function show($id){

        $noticia = Noticia::findOrFail($id);
        $post = Post::findOrFail($noticia->idPost);
        $user = User::findOrFail($post->idUser);
      
        
        return view('noticias.show',compact('noticia','user'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function store(StoreNoticiaRequest $request){

        //return $request->tituloNoticia;
        
        //$user = User::findOrFail($request->name);
        $post = new Post();
        $post->idUser = $request->idUser;
        $post->categoriaPost = $request ->categoriaPost;
        $post->save();

        $noticia = new Noticia();
        $noticia->idPost = $post->idPost;
        $noticia->tituloNoticia = $request->tituloNoticia;
        $noticia->resumenNoticia = $request->resumenNoticia;
        $noticia->contenidoNoticia = $request->contenidoNoticia;

        $noticia->save();
        //mas adelante o de las imagenes
         return redirect()->route('noticias.index');
         
         
     }

     public function edit($id){
        $noticia = Noticia::findOrFail($id);
        $post = Post::findOrFail($noticia->idPost);

        return view('noticias.edit',compact('noticia','post'));
    }

    public function update(UpdateNoticiaRequest $request, $id){


       
        $noticia = Noticia::findOrFail($id);
        $noticia->tituloNoticia = $request->tituloNoticia;
        $noticia->resumenNoticia = $request->resumenNoticia;
        $noticia->contenidoNoticia = $request->contenidoNoticia;
        $noticia->update();
        $post = Post::findOrFail($noticia->idPost);
        $post->categoriaPost = $request ->categoriaPost;
        $post->update();
    

        return redirect()->route('noticias.update', $noticia->idNoticia);
        
    }
}
