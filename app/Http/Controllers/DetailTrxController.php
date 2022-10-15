<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_trx;
class DetailTrxController extends Controller
{
         public function detail()
    {
        $detail = Detail_trx::all();
        return view('/detail/detail',['detail' => $detail]);
    }
    public function tambahDetail(Request $request)
    {
        Detail_trx::create([
              'id_dit' =>$request->id_dit,
              'id_transaksi' =>$request->id_transaksi,
              'id_barang' =>$request->id_barang,
              'jml' =>$request->jml,
              'total' =>$request->total
        ]);
        return redirect('/detail');
    }


   public function hapusDetail($id){
       $detail = Detail_trx::findOrFail($id);
       $detail->delete();
       return redirect('/detail');
    }
    public function editDetail($id)
    {
        $detail = Detail_trx::findOrFail($id);
        return view ('/detail/editdetail' ,['detail' => $detail]);

    }
    public function edit(Request $request,$id)
    {
     $detail = Detail_trx::findOrFail($id);
     $detail->update([
  
             'id_dit'=>$request ->id_dit,
              'id_transaksi'=>$request ->id_transaksi,
              'id_barang'=>$request ->id_barang,
              'jml'=>$request ->jml,
              'total'=>$request ->total


    ]);
            return redirect('/detail');

  
    }
}
