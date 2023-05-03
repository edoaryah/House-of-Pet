<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    public function index()
    {
        $dataAntrian = DB::table('antrians')
        ->join('orders','antrians.pembayaran_id','=','orders.id')
        ->join('users','antrians.user_id','=','users.id')
        ->get();

        // $dataAntrian = Antrian::with(['pembayarans','users'])->get();

        return view('antrian.index',compact('dataAntrian'));
    }

        public function showDate()
    {
        $dateInput = request('date');

        $dataAntrian = DB::table('antrians')
        ->join('orders','antrians.pembayaran_id','=','orders.id')
        ->join('users','antrians.user_id','=','users.id')
        ->where('tanggal_Pesan' , '=', $dateInput)->get();          

        return view('antrian.index',compact('dataAntrian'));
    }

    public function edit($id)
    {
        $data = Antrian::find($id);
        return view('antrian.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = Antrian::find($id);
        $data->status_antrian = $request->status_antrian;
        $data->save();

        return redirect()->intended('/antrian');
    }

    public function destroy($id)
    {
        $data = Antrian::find($id);
        $data->delete();
        DB::statement('SET @var := 0');
        DB::statement('UPDATE antrians SET id = (@var := @var+1)');
        DB::statement('ALTER TABLE antrians AUTO_INCREMENT=1');
        return redirect()->intended('/antrian');
    }
}
