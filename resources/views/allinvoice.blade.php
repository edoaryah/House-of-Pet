@extends('layouts.main')

@section('container')

<div class="invoice">
    <h1 class="heading">My Invoice</h1>

    <div class="box-container">
        @foreach ($orderAll as $order)
        <div class="box">
            <h3>Order Details</h3>
            <p><strong>Nama Customer:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Nama Hewan:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Nomor Telepon:</strong> Unknown</p>
            <p><strong>Paket Layanan:</strong> {{$order->paket}}</p>
            <p><strong>Total Bayar:</strong> {{$order->total_price}}</p>
            <p><strong>Tanggal Transaksi:</strong> {{$order->tanggal_Pesan}}</p>
            <p><strong>Status:</strong> {{$order->status}}</p>
        </div>
        @endforeach
    </div>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        transition: .2s linear;
    }

    .invoice {
        background: linear-gradient(45deg, #F5C6EC, #E11299);
        padding: 15px 9%;
        padding-bottom: 100px;
    }

    .invoice .heading {
        text-align: center;
        padding-bottom: 15px;
        color: #fff;
        text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        font-size: 50px;
    }

    .invoice .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
        gap: 15px;
    }

    .invoice .box-container .box {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        background: #FFEAEA;
        text-align: center;
        padding: 30px 20px;
    }

    .invoice .box-container .box h3 {
        color: #444;
        font-size: 22px;
        padding: 10px 0;
    }

    .invoice .box-container .box p {
        color: #777;
        font-size: 15px;
        padding: 10px 0;
        line-height: 1.8;
    }

    .invoice .box-container .box:hover {
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        transform: scale(1.03);
    }

    @media (max-width:768px) {
        .invoice {
            padding: 20px;
        }
    }
</style>

@endsection
