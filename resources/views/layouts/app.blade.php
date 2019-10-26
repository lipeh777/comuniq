<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Comuni') }}Q</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Compiled and minified CSS from web-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript from web -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>

<div id="app">
    <nav>
        <div class="nav-wrapper teal white">
            <a class="brand-logo center black-text" href="{{ url('/') }}">
                {{ config('app.name', 'Comuni') }}<span class=" green-text text-accent-4">Q</span>
            </a>

            <div class="container">

                <!-- Right Side Of Navbar -->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a class="black-text" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="black-text" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a id="navbarDropdown" class="black-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <li>
                            <div aria-labelledby="navbarDropdown">
                                <a class="black-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            </li>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>

    <!-- Rodapé -->
<footer class="page-footer  green accent-4">
<div class="container">
    <div class="row">
    <div class="col l6 s12">
        <h5 class="white-text">Grupo Comuniq</h5>
        <p class="grey-text text-lighten-4">Nós do corpo de estudantes do 3° periodo de informática para internet, 
        trabalhamos neste projeto como uma das nossas missões como desenvolvedores na disciplina de projeto e prática.
        Qualquer ajuda ou suporte serão aceitas para a melhoria e continuação do desenvolvimento deste projeto.</p>
    </div>
    <div class="col l3 s12">
        <h5 class="white-text">Navegação</h5>
        <ul>
        <li><a class="white-text" href="#!">Ajuda</a></li>
        <li><a class="white-text" href="#!">Dúvidas frequentes</a></li>
        <li><a class="white-text" href="#!">Reportar Erros</a></li>
        <li><a class="white-text" href="#!">Sobre</a></li>
        </ul>
    </div>
    <div class="col l3 s12">
        <h5 class="white-text">Encontre-nos</h5>
        <ul>
        <li><a class="white-text lighten-1" href="https://github.com/lipeh777/comuniq">GitHub</a></li>
        <li><a class="white-text lighten-1" href="#!">#</a></li>
        <li><a class="white-text lighten-1" href="#!">#</a></li>            
        <li><a class="white-text lighten-1" href="#!">#</a></i>
        </ul>
    </div>
    </div>
</div>
<div class="footer-copyright black">
    <div class="container center">
    Desenvolvido por: <a href="#" class="white-text text-lighten-1 "> IFPE - CAMPUS IGARASSU</a>
    </div>
</div>
</footer>

</div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
        <!--JavaScript Compiled and minified from web-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>
