@extends('layouts.navigation')

@section('content')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>House of Pet | Invoice</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@foreach ($orderAll as $order)
<div class="container">
    <div class="col-md-3 mx-auto ">
        <div class="card">
            <h1 class="card-title text-center mt-2">INVOICE</h1>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Orders Details
                            </div>
                            <div class="card-body">
                                <p><strong>Nama Customer:</strong> {{ Auth::user()->name }}</p>
                                <p><strong>Nama Hewan:</strong> {{ Auth::user()->email }} </p>
                                <p><strong>Nomor Telepon:</strong> Unknown</p>
                                <p><strong>Paket Layanan:</strong> {{$order->paket}}</p>
                                <p><strong>Total Bayar:</strong> {{$order->total_price}} </p>
                                <p><strong>Tanggal Transaksi:</strong> {{$order->tanggal_Pesan}} </p>
                                <p><strong>Status:</strong> {{$order->status}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection