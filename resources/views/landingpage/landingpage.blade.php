<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/landingpage.css">
    <link href="https://fonts.cdnfonts.com/css/maleantes-tres-d" rel="stylesheet">
    <title>House of Pet | Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a href="/sebelumcheckout">Layanan</a>
                    <a href="/antrian">Antrian</a>
                    <a href="/invoice">Invoice</a>
                    <a href="#">About</a>

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

    <!-- hero -->
    <section id="hero-section">
        <div class="container">
            <div class="row">
                <h1 class="display-4 text-white">UBAHHHHH222</h1>
                <h1 class="display-4 text-white">
                    Kami Siap Menjaga <br>
                    Hewan Kesayangan Anda
                </h1>
                <p class="text-white opacity-75">
                    Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, <br class="d-none d-md-block" />
                    consectetur, adipisci velit...
                </p>
                <div class="d-flex gap-3 mt-2 mt-lg-4">
                    <a href="/sebelumcheckout" class="btn bg-violet text-white rounded-pill px-4 shadow">Reservasi Grooming</a>
                    <a href="#" class="btn border-violet text-white rounded-pill px-4 shadow">Detail Layanan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- values products -->
    <section id="values-products">
        <div class="container">
            <div class="row">
                <!-- 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row flex-lg-column">
                        <img src="assets/img/layanan1.png" class="col-4 rounded-3" />
                        <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0">
                            <h5 class="mt-lg-3">Pet Shop</h5>
                            <p class="mt-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices.</p>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-12 col-md-6 col-lg-3 gap-3">
                    <div class="d-flex flex-row-reverse flex-md-row flex-lg-column">
                        <img src="assets/img/layanan2.png" class="col-4 rounded-3" />
                        <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0">
                            <h5 class="mt-lg-3">Veterinary Service</h5>
                            <p class="mt-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices.</p>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row flex-lg-column">
                        <img src="assets/img/layanan3.png" class="col-4 rounded-3" />
                        <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0">
                            <h5 class="mt-lg-3">Pet Hotel</h5>
                            <p class="mt-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices.</p>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-12 col-md-6 col-lg-3 gap-3">
                    <div class="d-flex flex-row-reverse flex-md-row flex-lg-column">
                        <img src="assets/img/layanan4.png" class="col-4 rounded-3" />
                        <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0">
                            <h5 class="mt-lg-3">Grooming</h5>
                            <p class="mt-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- doctors -->
    <section id="awards" class="bg-light">
        <div class="bgdokter">
            <div class="row text-center">
                @if($dataAntrian = DB::table('antrians')->select('id')->count() == 0)
                <h2 class="display-6 fw-bold">Antrian Masih Kosong Segera Pesan !!! </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() > 0)
                <h2 class="display-6 fw-bold">Antrian Tersisa Hari ini : {{ 10 - $dataAntrian = DB::table('antrians')->select('id')->count(); }} </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() == 2)
                <h2 class="display-6 fw-bold">Antrian Hari ini sudah Full</h2>
                @endif
                <h2 class="display-6 fw-bold">Meet Our Doctors</h2>
                <div class="row text-center mt-5">
                    <div class="col-md-4">
                        <img src="assets/img/dokter-11.png" class="awards">
                        <!-- <h4 class="mt-4">Drh. Niki</h4> -->
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/dokter-22.png" class="awards">
                        <!-- <h4 class="mt-4">Drh. Deasy</h4> -->
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/dokter-33.png" class="awards">
                        <!-- <h4 class="mt-4">Drh. Pascara</h4> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- buy -->
    <section id="buy">
        <div class="container">
            <div class="row text-center">
                <h2 class="display-6">Produk Kami Tersedia di</h2>
            </div>
            <div class="row mt-4">
                <div class="d-flex justify-content-center align-items-center flex-wrap flex-column flex-md-row links">
                    <a href="" class="btn bg-violet text-white px-5">Tokopedia</a>
                    <a href="" class="btn bg-violet text-white px-5">Bukalapak</a>
                    <a href="" class="btn bg-violet text-white px-5">Shopee</a>
                    <a href="" class="btn bg-violet text-white px-5 mt-0 mt-md-4 mt-lg-0">Tiktok Shop</a>
                    <a href="" class="btn bg-violet text-white px-5 mt-0 mt-md-4 mt-lg-0">Petshop Indonesia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section id="footer" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-6">
                    <!-- <a href="#" class="d-block mb-3">
                        <img src="assets/img/logo.png" width="150">
                    </a> -->
                    <ul class="list-unstyled">
                        <li>Alamat : Jl. Soekarno Hatta, Ruko SBC Kav-22</li>
                        <li>Kota : Malang</li>
                        <li>Kode : 65141</li>
                        <li>Telepon : 0341-362101</li>
                    </ul>
                    <div class="flex gap-2">
                        <a href="https://www.facebook.com/houseofpetmalang/?locale=id_ID"><img src="assets/img/facebook.png" class="sosmed-icon"></a>
                        <a href="https://www.instagram.com/houseofpetmalang/?hl=en"><img src="assets/img/instagram.png" class="sosmed-icon"></a>
                        <a href="https://api.whatsapp.com/send/?phone=62816559168&text&type=phone_number&app_absent=0"><img src="assets/img/whatsapp.png" class="sosmed-icon"></a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mt-md-0">
                    <h3 class="mb-2 text-darkviolet">Layanan</h3>
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">Pet Shop</a></li>
                        <li><a href="" class="text-decoration-none">Dokter Hewan</a></li>
                        <li><a href="" class="text-decoration-none">Pet Hotel</a></li>
                        <li><a href="" class="text-decoration-none">Grooming</a></li>
                        <li><a href="" class="text-decoration-none">Home Service</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3 mt-md-0">
                    <h3 class="mb-2 text-darkviolet">Perusahaan</h3>
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">About us</a></li>
                        <li><a href="" class="text-decoration-none">Contact us</a></li>
                        <li><a href="" class="text-decoration-none">Lowongan</a></li>
                        <li><a href="" class="text-decoration-none">Blog</a></li>
                        <li><a href="" class="text-decoration-none">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3 px-4 px-md-0 bg-darkviolet">
        <p class="text-white text-center">&copy: 2019-2023 House of Pet. Alright reserved</p>
    </footer>

    <a href="" id="backtotop" class="btn position-fixed">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>