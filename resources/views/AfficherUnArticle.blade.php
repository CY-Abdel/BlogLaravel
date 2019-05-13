<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--   ici dans le title on recupere l'url complet avec $_SERVER['PHP_SELF']
        la fonction dirname renvoie tout l'url sauf the last part of the url
        avec la fonction str_replace on le remplace avec "" chaine vide 
 -->
 <title> <?php
    if($_SERVER['PHP_SELF'] == '/' OR $_SERVER['PHP_SELF'] == "/index.php/"){
        echo "home";
    }
    else{
        echo str_replace(dirname($_SERVER['PHP_SELF']).'/','',$_SERVER['PHP_SELF']); 
    }
 ?>
 </title>
 <style>
.nav-prin{
    height:280px;
    background-color: rgb(130, 130, 134);
}
    
.p1 {
	font-size: 100px;
	/*margin-top: -40px;*/
	letter-spacing: 3px;
	color: white;
  	text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.p1:hover {
  font-size: 110px; 
}

.a1:hover,.a2:hover,.a3:hover,.a4:hover {
	background-color: lightgray;
	color: #007BFF;
}

.a1,.a2,.a3,.a4 {
	background-color: #007BFF;
	color: white;
	border-radius: 15px 50px 30px; 
}

.a1:active, .a2:active, .a3:active, .a4:active {
	background-color: white;
	color: #007BFF;
}

body>div>ul {
	border-radius: 15px;
 	border: 2px solid #007BFF;
}

.jumbotron {
    background-color: rgb(48, 61, 59);
    margin: 1%;
}
.top-bar{
    border-bottom:solid 1px black ;
    border-top:solid 1px black ;
    height: 12%;      
} 

body{ background-color: rgb(252, 240, 225); }
    
</style>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="top-bar fixed-top">
<div class="top-bar-left nav nav-pills" style=" position:absolute;top: 50%;transform: translateY(-50%);">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a class="a1" href="/">Home</a></li>
<li><a class="a2" href=<?php echo asset('/article');?>>Articles</a></li>
<li><a class="a3" href="/contact">Contact</a></li>
</ul>
</div>
</div>

<div class="nav-prin">
<div class=" column text-center" style=" position:absolute; top:95px; ">
<p class="p1">Un Article</p>
</div>
</div>

<div class="d-flex justify-content-center">
<div class="jumbotron container col-md-8" style="margin-top:50px;">
    <h3>{{ $post->post_title }}</h3>
    <p>{{ $post->post_content }}</p>
    <div class="callout">
        <ul class="list-unstyled">
            <li><a href="#">Auteur : {{ $post->author->name }}</a></li>
        </ul>
       
    </div>
</div>
</div>

<script>
      $(document).foundation();
    </script>
</body>
</html>
