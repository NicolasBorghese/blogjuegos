<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){

        $reviews = Review::orderBy('idReview','desc')->get();

        return view('reviews.index', compact('reviews'));
    }

    public function show($id){

        $review = Review::findOrFail($id);
        
        return view('reviews.show',compact('review'));
    }

    public function create(){
        return view('reviews.create');
    }

    public function store(StoreReviewRequest $request){

        
      
         Review::create($request->all());
         return redirect()->route('reviews.index');
         
         
     }

     public function edit($id){
        $review = Review::findOrFail($id);

        return view('reviews.edit',compact('review'));
    }

    public function getUpdate(UpdateReviewRequest $request, $id){

        //ver el video 20 para las validaciones de una url unica(slug)
        //ver el video 21 del curso para modificar el mensaje de error y los agributos
       
        $review = Review::findOrFail($id);
        $review->update($request->all());
    

        return redirect()->route('reviews.update', $review->idReview);
        
    }
}
