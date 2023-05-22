@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row mt-2">
        <div class="col-md-6 mx-auto">
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
                                    <p><strong>Nama Hewan:</strong> {{ $order->namahewan }} </p>
                                    <p><strong>Email:</strong> {{ Auth::user()->email }} </p>
                                    <p><strong>Nomor Telepon:</strong> Unknown</p>
                                    <p><strong>Paket Layanan:</strong> {{$order->paket}}</p>
                                    <p><strong>Total Bayar:</strong> {{$order->total_price}} </p>
                                    <p><strong>Tanggal Transaksi:</strong> {{$order->tanggal_Pesan}} </p>
                                    <p><strong>Status:</strong> {{$order->status}}</p>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/setelahinvoice">
                            @csrf
                            <input for="pembayaran_id" type="hidden" name="pembayaran_id" value="{{ $idOrder->id ?? 'null'}}">
                            <input for="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id ?? 'null'}}">
                            <input for="status_antrian" type="hidden" name="status_antrian" value="Tunggu">

                            <div class="class text-center mt-3">
                                <p>Terimakasih telah melakukan pemesanan !</p>
                            </div>

                            <div class="form-group col-md-12 d-flex justify-content-center mb-2">
                                <input class="btn btn-success" type="submit" value="Lihat Antrian">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection