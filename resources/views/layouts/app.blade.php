<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>CulturEnStock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px 1px 4px 0px lightgrey;">
    <a class="navbar-brand" href="{{ url('/') }}">CULTURENSTOCK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/posts') }}">ÉVÉNEMENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/abonnements') }}">ABONNEMENTS</a>
            </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">SE CONNECTER</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">S'INSCRIRE</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{ route('profiles.show', ['user' => auth()->user()]) }}" class="dropdown-item">Mon Profil</a>
                    <a href="{{ route('posts.create') }}" class="dropdown-item">Créer un événement</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form'.submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>
</nav>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
