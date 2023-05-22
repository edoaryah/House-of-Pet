@extends('layouts.main')

@section('container')

<div class="invoice">
    <h2>My Invoice</h2>
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
</div>

@endforeach

@endsection