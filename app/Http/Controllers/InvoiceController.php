<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function index(){
        $orderAll = DB::table('orders')
        ->join('services','orders.service_id','=','services.id')
        ->join('users','orders.user_id','=','users.id')
        ->where('user_id','=',Auth::user()->id)
        ->get();

        return view('allinvoice', compact('orderAll'));
    }

    public function push()
    {
        $dataAntrian = DB::table('antrians')->select('id')->count();
        $dataAntrianBaru = $dataAntrian + 1; 
        $databarubaru = $dataAntrianBaru + 12000 - 1;
        // $tanggalNow = Carbon::now()->format('Y/m/d');
        // @dd($tanggalNow); 
        $newDate = Carbon::now()->addDays(1)->format('Y/m/d');
        // @dd($databarubaru);
        // @dd($newDate);
        

        if($dataAntrianBaru > 10){
            $a = $dataAntrianBaru - 10;

            Antrian::create([
                'nomor_antrian' => $a,
                'user_id' => request('user_id'),
                'pembayaran_id' => request('pembayaran_id'),
                'status_antrian' => 'TUNGGU',
            ]);
            
            // $data = DB::table('orders')->where('id','=',$dataAntrianBaru)->get();
            // @dd($newDate);
            $data = Order::find($databarubaru);
            $data->tanggal_Pesan = $newDate;
            $data->save();

        }elseif($dataAntrianBaru <= 10){
            Antrian::create([
                'nomor_antrian' => $dataAntrianBaru,
                'user_id' => request('user_id'),
                'pembayaran_id' => request('pembayaran_id'),
                'status_antrian' => 'TUNGGU',
            ]);
        }

        
        return redirect()->intended('/antrian');
    }
}
