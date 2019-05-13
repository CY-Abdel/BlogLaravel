@extends('layouts/main')

@section('content')
<h1 class="p1">Articles</h1>
@endsection

@section('tous_articles')
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class=" row  medium-8 large-9 large-centered columns " >
    
@foreach($articles as $article)
    <div class="jumbotron blog-post">
        <h3 style="color :white; font-weight:bold;"><a href="article/{{ $article->post_name }}">{{ $article->post_title }}</a></h3>
        <p><img class="img-thumbnail" src="img/{{ $article->id }}.jpg" alt="image of a planet called Pegasi B"></p>
    </div>
   
    <div class="callout jumbotron" style = "height : 10%; margin-top:-10px;">
        <ul class="menu simple" style="color :white;">
            <li><a>Auteur : {{ $article->author->name }}</a></li>
            <li>{{ date('d-m-Y', strtotime($article->post_date )) }}</li>
        </ul>
    </div> 
@endforeach
</div>
@endsection

@section('pagination')
    <div class="container" style = "padding-top:200px;">
        <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="/article">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">
                  2
                <span class="sr-only">(current)</span>
            </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
@endsection