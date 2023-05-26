<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class KategoriController extends Controller
{
    public function index()
    {
        return view('/sebelumcheckout',[
            'semua' => Service::all()
       ]);
    }

    public function makeKategori(Request $request)
    {
        Service::create([
            'paket' => $request->paket,
            'harga'=> $request->harga,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->intended('/sebelumcheckout');
    }
}
