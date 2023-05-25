@extends('layouts.main')

@section('container')

<!-- hero -->
<section id="hero-section">
    <div class="container">
        <div class="row">
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

<!-- antrian -->
<section id="queue">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @if($dataAntrian = DB::table('antrians')->select('id')->count() == 0)
                <h2 class="display-6 fw-bold">Antrian Masih Kosong Segera Pesan !!! </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() > 0)
                <h2 class="display-6 fw-bold">Antrian Tersisa Hari ini : {{ 10 - $dataAntrian = DB::table('antrians')->select('id')->count(); }} </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() == 10)
                <h2 class="display-6 fw-bold">Antrian Hari ini sudah Full</h2>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- values products -->
<section id="values-products">
    <div class="container">
        <div class="row">
            <div class="judul text-center">
                <h2 class="display-6 fw-bold">Our Services</h2>
            </div>
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
            <!-- @if($dataAntrian = DB::table('antrians')->select('id')->count() == 0)
                <h2 class="display-6 fw-bold">Antrian Masih Kosong Segera Pesan !!! </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() > 0)
                <h2 class="display-6 fw-bold">Antrian Tersisa Hari ini : {{ 10 - $dataAntrian = DB::table('antrians')->select('id')->count(); }} </h2>
                @endif
                @if($dataAntrian = DB::table('antrians')->select('id')->count() == 10)
                <h2 class="display-6 fw-bold">Antrian Hari ini sudah Full</h2>
                @endif -->
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

<!-- why -->
<section id="why">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Kenapa Harus di House of Pet?</h2>
                <span class="sub-title">Pethouse impian hewan peliharaan anda</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <div class="card-layanan">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/award.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Profesional</h3>
                    <p class="mt-3">Semua Groomer di House of Pet mempunyai pengalaman & standar prosedur terbaik dalam melayani grooming anabul kesayangan kamu</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-layanan">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/shield.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Produk Aman</h3>
                    <p class="mt-3">Semua Groomer di House of Pet mempunyai pengalaman & standar prosedur terbaik dalam melayani grooming anabul kesayangan kamu</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-layanan">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/thumb-up.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Nyaman</h3>
                    <p class="mt-3">Semua Groomer di House of Pet mempunyai pengalaman & standar prosedur terbaik dalam melayani grooming anabul kesayangan kamu</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ulasan">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        @foreach ($komen as $km)
        <h4>
            {{ $km['username'] }}
        </h4>
        <p>
            {{ $km['comment'] }}
        </p>
        @endforeach
    </div>
</div>

<style>
    .ulasan {
        background-color: coral;
        width: 400px;
        height: 300px;
        border: 1px solid black;
        overflow: auto;
        margin: 0 auto;
    }
</style>

<!-- ulasan -->
<!-- <section id="ulasan">
    <div class="container">
        
    </div>
</section> -->

@endsection