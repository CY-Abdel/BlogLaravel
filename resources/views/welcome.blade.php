<!-- la vue welcome utilise le layout main -->
@extends('layouts/main')

<!-- Déclarer une section blade -->
@section('content')
<div class="p1">Bienvenu</div>
@endsection

<!-- @section('all 10 articles')
    <ul>
    @foreach ($posts as $post)
        <li>{{ $post->post_title }}</li>
    @endforeach
    </ul>
@endsection -->

@section('Les 3 articles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    @foreach ($posts as $post)
        <div class="d-flex align-items-stretch col-md-4 " >
        <div class="jumbotron">
            <h3 style="color :white; font-weight:bold;">{{ $post->post_name }}</h3>
            <p><img class="img-thumbnail" src="img/{{ $post->id }}.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="lead"><a href="article/{{ $post->post_name }}">{{ $post->post_title }}</a></p> 
            <p  style="color :white;">{{ date('d-m-Y', strtotime($post->post_date)) }}</p>
        </div>
        </div>
    @endforeach
@endsection