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
  
</style>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>

<div class="top-bar fixed-top d-flex">
    <div class="top-bar-left nav nav-pills align-self-center mr-auto p-2">
    <ul class="menu">
        <li class="menu-text">Blog</li>
        <li><a class="a1" href="/">Home</a></li>
        <li><a class="a2" href="/article">Articles</a></li>
        <li><a class="a3" href="/contact">Contact</a></li>
        <?php 
            use App\UserRole;
            use Illuminate\Support\Facades\Auth;

            $idUser = Auth::user();
            if ($idUser != null) {
                $id = $idUser['id'];
                $user = UserRole::where('user_id',$id)->get();
                $role;
                foreach ($user as $obj) {
                    $role = $obj->role_id;
                }
                if ($role == 2) {
                    echo "<li><a class='a3' href='/controle'>Panneau de controle</a></li>";
                }
            }
        ?>
    </ul>
    </div>
    
    <div class="top-bar-right small-up-1 medium-up-2 large-up-2 align-self-center ml-auto p-2">

     <!-- // The check user is a user that is logged in
     The guest user is a user that is not logged in-->
     @if(Auth::guest())
        <?php $lien = str_replace(dirname($_SERVER['PHP_SELF']).'/','',$_SERVER['PHP_SELF']) ?>
        @if ($lien !='login' && $lien != "register")
        <a href="{{ route('login') }}"><button type="button" class="btn btn-primary "> Se connecter</button></a>
        @endif
    @else
        <a href="/profil"><button type="button" class="btn btn-success" disabled>Profil : {{ Auth::user()->name }}</button></a>
        <a href="/deconnexion"><button type="button" class="btn btn-primary ">Déconnexion</button></a>
    @endif

    </div>
    
    
    </div>
</div>

<div class="nav-prin callout">
<div class="columns text-center" style=" position:relative; top:95px; ">
    @yield('content')
</div>
</div>

<!-- @yield('all articles') -->
<div class="d-flex justify-content-center">
<div class="row container-fluid small-up-1 medium-up-2 large-up-3 ">
    @yield('Les 3 articles')
</div>
</div>

<div class="d-flex justify-content-center">
    <div class="container">
        @yield('formulaire')
        @yield('Msg_enregistre')
        @yield('Liste_contact')
        @yield('tous_articles')
        @yield('pagination')
        @yield('Connexion')
        @yield('panneau_cntr')
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
