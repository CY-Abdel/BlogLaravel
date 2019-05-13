<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {   
        //récupére les 3 dérnier articles posté selon la date 
        $post = Post::orderBy('post_date','desc')->limit(3)->get();
        //envoyer la variable $post qui contient les information sur les 3 derniers posts
        return view('welcome',[
            'posts' => $post
        ]);
    }

}
