<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('css/MangaWorld.css') !!}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body style="background-image: url('img/fond.png')">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <img src="img/logo.png" style="max-height: 50px;max-width:50px;margin-right:10px;">
        <a class="navbar-brand" href="{{url('/')}}">MangaShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Les Mangas
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/mangas')}}">Liste des mangas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/mangas/top5')}}">Top 5 des mangas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Les Anime
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/anime')}}">Liste des anime</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/anime/top5')}}">Top 5 des anime</a>
                    </div>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Bienvenue,  {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"   href="{{ url('/vosNotes') }}">Vos notes</a>

                            @if(Auth::user()->isAdmin==1)
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"   href="{{ url('/comptes') }}">Gestion des comptes</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Deconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Compte
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"   href="{{ route('login') }}">Se connecter</a>
                            <a class="dropdown-item"   href="{{ route('register') }}">Se créer un compte</a>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<header>
</header>

<div class="card text-center" style="opacity: .8; max-width: 50%; margin: auto; margin-top:10%;">
    <div class="card-body">
        <h5 class="card-title text-black">BIENVENU INCONNU</h5>
        <p class="card-text">Depêches toi d'aller vite explorer ce super site !!</p>
        <a href="{{ url('/mangas') }}" class="btn btn-primary">Explorer</a>
    </div>
    <div class="card-footer">
        <p class="card-text">Site réalisé dans le câdre d'un cours en Laravel</p>
    </div>
</div>

{!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
</body>
</html>