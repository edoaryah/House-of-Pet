@extends("layouts.navigation")

@section ('content')
<!-- Casuroll -->
<div class="carousel-container">

  <div class="carousel">
    <button class="buton" id="slideBack">
      <img class="arrow1" src="/img/arrow.png" alt="" class="button">
    </button>
    <div id="container" class="card-container">
      <div class="card">
        <img class='gamcar' src="/img/kucing1.jpg" alt="">
      </div>
      <div class="card">
        <img class='gamcar' src="/img/kucing2.jpg" alt="">
      </div>
      <div class="card">
        <img class='gamcar' src="/img/kucing3.jpg" alt="">
      </div>
    </div>
    <button class="buton" id="slide">
      <img class="arrow2" src="/img/arrow.png" alt="" class="button">
    </button>
  </div>
</div>
<!-- Selamat Datang -->
<div class='seldat'>
  <div class='seldat1'>Selamat Datang Di</div>
  <div class='seldat2'>HOUSE OF PET</div>
</div>
<!-- Deskripsi -->


<div class='desc'>
  <img class='desc1' src="/img/desc.png" alt="Gambar Toko">
  <div class="desc2">
    <div class='desc2a'>House of Pet Merupakan salah satu petshop terlengkap yang ada di daerah Malang, tepatnya di Ruko Bisnis Center, Jl. Soekarno Hatta No. Kav. 22, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142.</div>
    <div class='desc2a'>House of Pet memberikan pelayanan yang terbaik untuk Anda, dengan pekerja yang profesional dan yang pastinya berpengalaman di bidangnya masing-masing. </div>
  </div>
</div>
<script>
  // Slide Button Client
  var button = document.getElementById("slide");
  button.onclick = function() {
    var container = document.getElementById("container");
    sideScroll(container, "right", 100, 100, 500);
  };

  var back = document.getElementById("slideBack");
  back.onclick = function() {
    var container = document.getElementById("container");
    sideScroll(container, "left", 25, 100, 500);
  };

  function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function() {
      if (direction == "left") {
        element.scrollLeft -= step;
      } else {
        element.scrollLeft += step;
      }
      scrollAmount += step;
      if (scrollAmount >= distance) {
        window.clearInterval(slideTimer);
      }
    }, speed);
  }
</script>


<!-- URGENT -->
@endsection