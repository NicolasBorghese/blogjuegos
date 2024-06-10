<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Noticia;
use App\Models\Post;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){

        $noticias = Noticia::orderBy('idNoticia','desc')->get();

        return view('noticias.index', compact('noticias'));
    }

    public function show($id){

        $noticia = Noticia::findOrFail($id);
        
        return view('noticias.show',compact('noticia'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function store(StoreNoticiaRequest $request){

        $post = new Post();
        $post->nombreCuenta = $request->nombreCuenta;
        $post->categoriaPost = $request ->categoriaPost;
        $post->save();

        $noticia = new Noticia();
        $noticia->idPost = $post->idPost;
        $noticia->tituloNoticia = $request->titloNoticia;
        //...
         //Noticia::create($request->all());
         return redirect()->route('noticias.index');
         
         
     }

     public function edit($id){
        $noticia = Noticia::findOrFail($id);

        return view('noticias.edit',compact('noticia'));
    }

    public function getUpdate(UpdateNoticiaRequest $request, $id){

        //ver el video 20 para las validaciones de una url unica(slug)
        //ver el video 21 del curso para modificar el mensaje de error y los agributos
       
        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());
    

        return redirect()->route('noticias.update', $noticia->idNoticia);
        
    }

}
