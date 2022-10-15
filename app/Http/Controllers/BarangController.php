<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function alert()
    {
        $barang = Barang::all();
        return view('/barang/barang',['barang' => $barang]);
    }
    public function tambahBarang(Request $request)
    {
        Barang::create([
            'id_barang'=>$request ->id_barang,
            'nama_barang'=>$request ->nama_barang,
            'harga'=>$request ->harga,
            'stok'=>$request ->stok
        ]);
        return redirect('/barang');
    }


   public function hapusBarang($id){
       $barang = Barang::findOrFail($id);
       $barang->delete();
       return redirect('/barang');
    }
    public function editBarang($id)
    {
        $barang = Barang::findOrFail($id);
        return view ('/barang/editbarang' ,['barang' => $barang]);

    }
    public function edit(Request $request,$id)
    {
     $barang = Barang::findOrFail($id);
     $barang->update([

          'id_barang'=>$request ->id_barang,
          'nama_barang'=>$request ->nama_barang,
          'harga'=>$request ->harga,
          'stok'=>$request ->stok

    ]);
            return redirect('/barang');

  
    }


}
