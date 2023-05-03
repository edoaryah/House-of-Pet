<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>House Pet | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='/css/dashboard.css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<!-- Header -->

<body>
    <header class='header'>
        <div class="header-container">
            <div class="logoo">
                <img class='logo' src="/img/logo.png" />
            </div>
            <div class="header2">
                <div class='judul1'>House of Pet</div>
                <div class='judul2'>give the best of your pet</div>
            </div>
        </div>
    </header>
    <!-- Navbar -->
    <nav class='navbar'>
        <ul class='button'>
            <li class='buttonin'><a href="/" class='navfont'>Home</a></li>
            <li class='buttonin'><a href="/sebelumcheckout" class='navfont'>Service</a></li>
            <li class='buttonin'><a href="/antrian" class='navfont'>Antrian</a></li>
            <li class='buttonin'><a href="/invoice" class='navfont'>Invoice</a></li>
        </ul>

        <ul class='button'>
            @guest
            @if (Route::has('login'))
            <li class="buttonin">
                <a class="navfont" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="buttonin">
                <a class="navfont" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="navfont" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>

    @yield('content')

</body>

</html>