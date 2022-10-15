<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Detail_trx;
use DB;
class TransaksiController extends Controller
{
      public function transaksi()
    {
        $gabung = DB::table('transaksis')
                ->select('transaksis.*','barangs.nama_barang')        
                ->join('barangs', 'barangs.id_barang', '=', 'transaksis.id_barang')
                ->get();
        $barang = Barang::all();

        return view('/transaksi/transaksi',compact('gabung','barang'));
    }
    public function tambahTransaksi(Request $request)
    {
        //dd($request);
        Transaksi::create([
            'id_transaksi'=>$request ->id_transaksi,
            'tgl_transaksi'=>$request ->tgl_transaksi,
            'id_user'=>$request ->id_user,
            'id_barang' =>$request->id_barang,
            'total_bayar'=>$request ->total_bayar,
            'bayar'=>$request ->bayar


        ]);

        Detail_trx::create([

              'id_dit' =>$request->id_dit,
              'id_transaksi' =>$request->id_transaksi,
              'id_barang' =>$request->id_barang,
              'jml' =>$request->jml,
              'total' =>$request->total
          
        ]);
        return redirect('/transaksi');


    }

   public function hapusTransaksi($id){
       $transaksi = Transaksi::findOrFail($id);
       $transaksi->delete();
       return redirect('/transaksi');
    }
    public function editTransaksi($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view ('/transaksi/edittransaksi' ,['transaksi' => $transaksi]);

    }
    public function edit(Request $request,$id)
    {
     $transaksi = Transaksi::findOrFail($id);
     $transaksi->update([

            'id_transaksi'=>$request ->id_transaksi,
            'tgl_transaksi'=>$request ->tgl_transaksi,
            'id_user'=>$request ->id_user,
            'id_barang'=>$request ->id_barang,
            'total_bayar'=>$request ->total_bayar,
            'bayar'=>$request ->bayar


    ]);
            return redirect('/transaksi');

  
    }
}
