@extends('layouts.navigation')

@section('content')

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

<title>House of Pet | Checkout</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-md-12">
        <h2>Detail Order</h2>
        <hr>
        <div class="card mb-3">
            <div class="card-header">
                <h4>Order#{{$idOrder->id}}</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Nama Pelanggan:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }} </p>
                        <p><strong>Tanggal:</strong> {{$order->namahewan}} </p>
                        <p><strong>Tanggal:</strong> {{$order->tanggal_Pesan}} </p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Paket Layanan</th>
                            <th scope="col">Harga Layanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{$order->paket}} </td>
                            <td>Rp {{$order->total_price}} </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1" class="text-right"><strong>Total Harga:</strong></td>
                            <td><strong>Rp {{$order->total_price}}</strong></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="class">
                    <a href="/" class="btn btn-danger btn-lg mt-3" style="width: 170px;">Batalkan</a>
                    <button class="btn btn-primary mt-3 btn-lg" id="pay-button" style="width: 170px;">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                // alert("payment success!");
                window.location.href = 'invoice/{{$idOrder->id}}'
                console.log(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
            }
        })
    });
</script>

@endsection