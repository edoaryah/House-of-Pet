@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<div class="about-section" style="text-align:center">
  <h1>Tentang Kami</h1>
  <p>Kami adalah Petshop yang berdedikasi untuk menyediakan perawatan terbaik dan pelayanan yang ramah untuk hewan peliharaan Anda. <br />
    Kami percaya bahwa hewan peliharaan adalah anggota keluarga yang berharga dan layak mendapatkan perhatian dan kasih sayang yang tak terbatas.</p>
  <p>Terima kasih telah mengunjungi halaman About Petshop kami. Kami berharap dapat bertemu dengan Anda dan hewan peliharaan Anda segera!</p>
</div>
<center>
  <br>
  <h2 style="text-align:center">Lokasi</h2>
  <div id="map"></div>

  </script>


  <div class="text">
    <div class="top-right" style="color:#000;"></div>
    <div style="margin-top:500px "></div>
    <p style="color:#000;">
      Bisnis Center, Ruko Soekarno Hatta,<br />
      Jl. Soekarno Hatta No.Kav. 22, Jatimulyo,<br />
      Kec. Lowokwaru Kota Malang, Jawa Timur 65142</p>
    <img src="img/icon.png" alt="" width="20"><br />
    {{-- <a href="https://goo.gl/maps/HTpPNj9jHWXmdS429?coh=178573&entry=tt">Google Maps</a>
        <img src="img/link.png" alt="" width="20" style="color:#000;"> --}}
    <p style="color: #000">08********** <img src="img/kontak.png" alt="" width="20">
  </div>

  </p>

  </div>

  <center>
    <p style="margin-top: 2em"></p>
    <h2 style="text-align:center" style="color:#000;">Our Team</h2>
    <div class="dokter" style="display: flex; align-items: center; justify-content: center;">
      <div class="row">
        <div class="column">
          <div class="card" style="margin-right: 10px">
            <img src="/img/drhniki.jpg" alt="Niki" width="400">
            <div class="container">
              <h2>drh.Niki</h2>
              <p>drh.Nikki adalah seorang dokter hewan dengan <br />
                keahlian di bidang nutrisi hewan.</p>
              <br>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="/img/drhdeasy.jpg" alt="Deasy" width="400" class="center">
            <div class="container">
              <h2>drh.Deasy</h2>
              <p>drh.Deasy adalah seorang dokter hewan dengan <br />
                pengalaman minat khusus dalam perawatan <br />
                hewan eksotis.</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card" style="margin-left: 10px">
            <img src="/img/drpascara.jpg" alt="Pascara" width="400" class="center">
            <div class="container">
              <h2>drh.Pascara</h2>
              <p style=text-align: justify; text-indent: 0.5in;>drh.Pascara adalah seorang dokter hewan berbakat <br />
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
  <style>
    :before,
    :after {
      box-sizing: inherit;
    }

    #map {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      height: 400px;
      margin-top: -250px;
    }


    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;

    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      padding: 20px;
      box-sizing: border-box;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-container {
      display: flex;
      justify-content: center;
      align-items: center;
      max-height: 10%;
      /* Mengatur tinggi container agar mengisi seluruh tinggi viewport */
    }


    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #FED2F0;
      color: white;
    }

    .container {
      padding: 0 16px;

    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #555;
    }

    .gambar {
      margin-right: 0.8px 4px;

    }

    .a {
      position: relative;
      text-align: center;
      color: white;
    }


    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
  </style>
  <script>
    // var map = L.map('map').setView([0, 0], 1);
    // L. tileLayer('https://api.maptiler.com/maps/basic-v2/{z}/{x}/{y}.png?key=mxox0JOfvLx1nqBSK3n0',{
    //   license: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    // } ).addTo(map);
    // var make= L.maker([112.6, -7.94]).addTo(map);
    var map = L.map('map').setView([-7.942761, 112.620367], 13);

    L.tileLayer('https://api.maptiler.com/maps/basic-v2/{z}/{x}/{y}.png?key=mxox0JOfvLx1nqBSK3n0', {
      attribution: '<a href="https://www.maptiler.com/">MapTiler</a> | <a href="https://www.openstreetmap.org/">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-7.942761, 112.620367]).addTo(map);
    marker.bindPopup("Marker Position: [-7.942761, 112.620367]").openPopup();
  </script>
  @endsection