<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Tambahan -->
    <link rel="stylesheet" href="/css/main2.css">
    <link href="https://fonts.cdnfonts.com/css/maleantes-tres-d" rel="stylesheet">

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- Page title -->
    <title>House of Pet | Home</title>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.png" width="100">
                </a>
                <h2 class="header1 mt-2">House of Pet</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto d-flex gap-4">
                        <a href="/">Home</a>
                        @auth
                        @if (auth()->user()->level=="user")
                        <a href="/sebelumcheckout">Layanan</a>
                        @elseif (auth()->user()->level=="admin")
                        <a href="/tambah">Layanan</a>
                        @endif
                        @endauth
                        <a href="/antrian">Antrian</a>
                        <a href="/forum">Community</a>
                        @auth
                        @if (auth()->user()->level=="user")
                        <a href="/invoice">Invoice</a>
                        @endif
                        @endauth
                        <a href="/about">About</a>

                        @guest
                        @if (Route::has('login'))
                        <a class="navfont" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="navfont" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif

                        @else
                        <a id="navbarDropdown" class="navfont" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <!-- <a id="navbarDropdown" class="navfont" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a> -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div id="content">
            @yield('container')
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <p class="text-white text-center">&copy: 2019-2023 House of Pet. Alright reserved</p>
            </div>
        </footer>
    </div>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>