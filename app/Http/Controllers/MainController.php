<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //ici on recupère tous les posts et tags qu'on affichera sur la page d'accueil.
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        dump($posts);
        //dump($tags);
        return view('index',compact('posts','tags'));
    }

}
