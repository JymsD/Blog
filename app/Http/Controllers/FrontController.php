<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class FrontController extends Controller
{
    public function __construct(){
         
         Carbon::setLocale('es');
    }

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function($articles){
        	$articles->category;
        	$articles->images;
        });

        return view('front.index')
        ->with('articles', $articles);
    }

    public function searchCategory($name){

        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
         $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front.index')
        ->with('articles', $articles);



    }

    public function searchTag($name){

        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')
        ->with('articles', $articles);
    }

   
}
