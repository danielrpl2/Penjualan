<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Username;
class UsernameController extends Controller
{
       public function username()
    {
        $username = Username::all();
        return view('/username/username',['username' => $username]);
    }
    public function tambahUsername(Request $request)
    {
        Username::create([
            'id_user'=>$request ->id_user,
            'nama'=>$request ->nama,
            'username'=>$request ->username,
            'password'=>$request ->password,
            'akses'=>$request ->akses
        ]);
        return redirect('/username');
    }


   public function hapusUsername($id){
       $username = Username::findOrFail($id);
       $username->delete();
       return redirect('/username');
    }
    public function editUsername($id)
    {
        $username = Username::findOrFail($id);
        return view ('/username/editusername' ,['username' => $username]);

    }
    public function edit(Request $request,$id)
    {
     $username = Username::findOrFail($id);
     $username->update([
  
            'id_user'=>$request ->id_user,
            'nama'=>$request ->nama,
            'username'=>$request ->username,
            'password'=>$request ->password,
            'akses'=>$request ->akses


    ]);
            return redirect('/username');

  
    }
}
