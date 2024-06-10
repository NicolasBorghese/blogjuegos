<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){

        $reviews = Review::orderBy('idReview','desc')->get();

        return view('reviews.index', compact('reviews'));
    }

    public function show($id){

        $review = Review::findOrFail($id);
        $post = Post::findOrFail($review->idPost);
        $user = User::findOrFail($post->idUser);
      
        
        return view('reviews.show',compact('review','user'));
    }

    public function create(){
        return view('reviews.create');
    }

    public function store(StoreReviewRequest $request){

        

        $post = new Post();
        $post->idUser = $request->idUser;
        $post->categoriaPost = $request ->categoriaPost;
        $post->save();

        $review = new Review();
        $review->idPost = $post->idPost;
        $review->nombreJuego = $request->nombreJuego;
        $review->resumenReview = $request->resumenReview;
        $review->contenidoReview = $request->contenidoReview;
        $review->puntajeJuego = $request->puntajeJuego;
        $review->generoJuego = $request->generoJuego;

        $review->save();
        //mas adelante o de las imagenes
         return redirect()->route('reviews.index');
         
         
     }

     public function edit($id){
        $review = Review::findOrFail($id);
        $post = Post::findOrFail($review->idPost);

        return view('reviews.edit',compact('review','post'));
    }

    public function update(UpdateReviewRequest $request, $id){
       
        $review = Review::findOrFail($id);
        $review->nombreJuego = $request->nombreJuego;
        $review->resumenReview = $request->resumenReview;
        $review->contenidoReview = $request->contenidoReview;
        $review->puntajeJuego = $request->puntajeJuego;
        $review->generoJuego = $request->generoJuego;
        $review->update();
        $post = Post::findOrFail($review->idPost);
        $post->categoriaPost = $request ->categoriaPost;
        $post->update();
    

        return redirect()->route('reviews.update', $review->idReview);
        
    }
}
