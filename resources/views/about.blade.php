@extends('layouts.main')

@section('container')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="about-section" style="text-align:center">
  <h1>Tentang Kami</h1>
  <p>Kami adalah Petshop yang berdedikasi untuk menyediakan perawatan terbaik dan pelayanan yang ramah untuk hewan peliharaan Anda. <br />
    Kami percaya bahwa hewan peliharaan adalah anggota keluarga yang berharga dan layak mendapatkan perhatian dan kasih sayang yang tak terbatas.</p>
  <p>Terima kasih telah mengunjungi halaman About Petshop kami. Kami berharap dapat bertemu dengan Anda dan hewan peliharaan Anda segera!</p>
</div>
<center>
<h2 style="text-align:center">lokasi</h2>
<div class="a">
  <img class="img/lokasi.jpg" src="img/lokasi.jpg" alt="Gambar" style="width: 50%">
  
  <div class="text">
    <div class="top-right"></div>
    Bisnis Center, Ruko Soekarno Hatta,<br/> 
    Jl. Soekarno Hatta No.Kav. 22, Jatimulyo,<br/> 
    Kec. Lowokwaru Kota Malang, Jawa Timur 65142
      <img src="img/icon.png" alt="" width="20"><br/>
        <a href="https://goo.gl/maps/HTpPNj9jHWXmdS429?coh=178573&entry=tt">Google Maps</a>
        <img src="img/link.png" alt="" width="20">
        <p>08********** <img src="img/kontak.png" alt="" width="20">
        </div>
      
      </p>
        
</div>

<p style="margin-top: 2em"></p>
<h2 style="text-align:center">Our Team</h2>
<div class="dokter" style="display: flex; align-items: center; justify-content: center;">
  <div class="row">
    <div class="column">
      <div class="card" style="margin-right: 10px" >
          <img src="/img/drhniki.jpg" alt="Niki" width="400" >
        <div class="container">
          <h2>drh.Niki</h2>
          <p class="title">Halo!</p>
          <p>drh.Nikki adalah seorang dokter hewan dengan <br/>
            keahlian di bidang nutrisi hewan.</p>
            <br>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="/img/drhdeasy.jpg" alt="Deasy" width="400"  class="center">
        <div class="container">
          <h2>drh.Deasy</h2>
          <p class="title">Halo!</p>
          <p>drh.Deasy adalah seorang dokter hewan dengan <br /> 
            pengalaman minat khusus dalam perawatan <br/>
            hewan eksotis.</p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card" style="margin-left: 10px" >
        <img src="/img/drpascara.jpg" alt="Pascara" width="400" class="center">
        <div class="container">
          <h2>drh.Pascara</h2>
          <p class="title">Halo!</p>
          <p style=text-align: justify; text-indent: 0.5in;>drh.Pascara adalah seorang dokter hewan berbakat <br/>
            <br><br>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection