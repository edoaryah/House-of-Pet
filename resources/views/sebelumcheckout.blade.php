@extends('layouts.main')

@section('container')

@auth
@if (auth()->user()->level=="user")
<div class="div">
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">PEMESANAN</h5>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Grooming</h5>
                                <p class="card-text">
                                    Grooming Adalah Segala Tindakan Yang Dilakukan Kepada Anabul (Anak Bulu) Kesayangan Kita, Kucing Ataupun Anjing, Untuk Menjaga Penampilan Dan Kesehatannya.
                                </p>
                                @if($dataAntrian = DB::table('antrians')->select('id')->count() > 10)
                                <p>!!!Perhatian Antrian hari ini sudah penuh apabila memesan sekarang akan otomatis hewan peliharaan anda akan diberi pelayanan esok hari </p>
                                @endif
                                <form action="/order" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                                        <input type="date" name="tanggal_Pesan" class="form-control" id="tanggal" required readonly placeholder="">

                                        <div class="class mt-2">
                                            <button id="prev-day" class="btn btn-primary mr-2">&laquo; Mundur</button>
                                            <button id="next-day" class="btn btn-primary">&raquo; Maju</button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="namahewan" class="form-label">Nama Hewan</label>
                                        <input type="text" name="namahewan" class="form-control" id="namahewan" placeholder="Masukkan nama hewan anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="service_id" class="form-label">Paket Layanan</label>
                                        <select class="form-select" name="service_id" >
                                            <option value="">-- Pilih paket layanan grooming --</option>
                                            @foreach ($services as $service)
                                            <option value="{{ $service->id }}" price="{{ $service->harga }}">{{ $service->paket}} - Rp {{ $service->harga }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <a href="/" class="btn btn-danger mt-3" style="width: 100px;">Cancel</a>
                                        <button type="submit" class="btn btn-primary mt-3" style="width: 100px;">Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var inputTanggal = document.getElementById("tanggal");

        var now = new Date();
        inputTanggal.value = now.toISOString().substring(0, 10);

        document.getElementById("prev-day").addEventListener("click", function() {
            var prevDay = new Date(inputTanggal.value);
            var minDate = new Date();
            if (prevDay > minDate) {
                prevDay.setDate(prevDay.getDate() - 1);
                inputTanggal.value = prevDay.toISOString().substring(0, 10);
            }
        });

        document.getElementById("next-day").addEventListener("click", function() {
            var nextDay = new Date(inputTanggal.value);
            nextDay.setDate(nextDay.getDate() + 1);
            inputTanggal.value = nextDay.toISOString().substring(0, 10);
        });
    </script>  
</div>
@endif
@endauth  

@auth
@if (auth()->user()->level=="admin")
<form action="/tambah" method="POST">
@csrf
<center>
<div class="buatkategori" style="margin: 0 auto">
    <h2 class="display-6 fw-bold">Tambah Kategori</h2>    
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationServer01">Nama Paket</label>
            <input type="text" class="form-control is-valid" id="validationServer01" name="paket" placeholder="Nama Kategori "  required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationServer02">Harga Paket</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="harga" placeholder="Harga Paket"  required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationServer02">Keterangan Paket</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="keterangan" placeholder="KeteranganPaket"  required>
        </div>
      </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</div>
</center>  
@endif
@endauth


@endsection