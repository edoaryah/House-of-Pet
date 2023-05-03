<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TAMBAHAN
        return view('sebelumcheckout', [
             'services' => Service::all()
        ]);

        // $data = Service::with(['service'])->get();
        // return view('sebelumcheckout', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function order(Request $request)
    {
        $productId = $request->input('service_id');
        $product = Service::findOrFail($productId);
        $price = $product->harga;
        
        $request->request->add(['total_price' => $price, 'status' => 'Unpaid', 'user_id' => Auth::user()->id]);
        $order = Order::create($request->all());
        $idOrder = DB::table('orders')->select('id')->get()->last();

        // @dd($idOrder);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $idOrder->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'last_name' => '',
                'phone' => $request->phone,
            ),
        );

        // $data = Order::with(['service'])->get();

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $order = DB::table('orders')
        ->join('services','orders.service_id','=','services.id')
        ->join('users','orders.user_id','=','users.id')
        ->get()->last();



        return view('checkout', compact('snapToken', 'order','idOrder'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $order = DB::table('orders')
        ->join('services','orders.service_id','=','services.id')
        ->join('users','orders.user_id','=','users.id')
        ->get()->last();

        $idOrder = DB::table('orders')->select('id')->get()->last();

        // $order = DB::table('orders')->get()->last();

        // $data = Pembayaran::with(['users'])->get();
        return view('invoice', compact('order','idOrder'));
    }
}
