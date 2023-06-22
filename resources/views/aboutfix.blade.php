@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<section id="about1">
    <div class="about-tentangkami">
        <h1>Tentang Kami</h1>
        <p>Kami adalah Petshop yang berdedikasi untuk menyediakan perawatan terbaik dan pelayanan yang ramah untuk hewan peliharaan Anda.</p>
        <p>Kami percaya bahwa hewan peliharaan adalah anggota keluarga yang berharga dan layak mendapatkan perhatian dan kasih sayang yang tak terbatas.</p>
        <p>Terima kasih telah mengunjungi halaman About Petshop kami. Kami berharap dapat bertemu dengan Anda dan hewan peliharaan Anda segera!</p>
    </div>
</section>

<section id="about2">
    <div class="about-peta">
        <h2>Lokasi</h2>
        <div id="map"></div>
    </div>
</section>

<section id="about3">
    <div class="about-peta2">
        <p>Bisnis Center, Ruko Soekarno Hatta</p>
        <p>Jl. Soekarno Hatta No.Kav. 22, Jatimulyo</p>
        <p>Kec. Lowokwaru Kota Malang, Jawa Timur 65142</p>
        <img src="img/icon.png" alt="" width="20"><br />
        <a href="https://goo.gl/maps/HTpPNj9jHWXmdS429?coh=178573&entry=tt">Google Maps</a>
        <img src="img/link.png" alt="" width="20" style="color:#000;">
        <p style="color: #000">08********** <img src="img/kontak.png" alt="" width="20">
    </div>
</section>

<script>
    var map = L.map('map').setView([-7.942761, 112.620367], 13);

    L.tileLayer('https://api.maptiler.com/maps/basic-v2/{z}/{x}/{y}.png?key=mxox0JOfvLx1nqBSK3n0', {
        attribution: '<a href="https://www.maptiler.com/">MapTiler</a> | <a href="https://www.openstreetmap.org/">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-7.942761, 112.620367]).addTo(map);
    marker.bindPopup("Marker Position: [-7.942761, 112.620367]").openPopup();
</script>

<style>
    #map {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        height: 400px;
        margin-top: -250px;
    }
</style>

@endsection