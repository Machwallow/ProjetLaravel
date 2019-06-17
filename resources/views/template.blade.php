<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('css/MangaWorld.css') !!}
    <title>@yield('titrePage')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">

        <a class="navbar-brand" href="{{url('/mangas')}}">Mangas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
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
                    </div>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Bienvenue,  {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Se connecter
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"   href="{{ route('login') }}">Se Connecter</a>
                        </div>
                    </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>
<header>
    <h1>@yield('titreItem')</h1>
</header>
@yield('contenu')
<!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-white text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>MangaShop a été réalisé par Lucas Aupoil & Stanislas Monnier</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-white-50 py-2">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
{!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
</body>
</html>