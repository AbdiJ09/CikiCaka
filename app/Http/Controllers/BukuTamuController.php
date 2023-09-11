<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BukuTamuController extends Controller
{
    public function show(){
        $bukuTamu = BukuTamu::all();
        return view('bukutamu',[
            "bukutamu" => $bukuTamu,
            "title" => "Buku Tamu"
        ]);
    }

    public function create(){
        return view('bukutamu.add',[
            'title' => "add buku tamu"
        ]);
    }
    public function store(Request $request){
        $add = $request->validate([
            'no_telp' => 'required',
            'nama' => 'required',
            'pesanan' => 'required'
        ]);

        BukuTamu::create($add);
        return redirect('/bukutamu')->with('sucess','Data has been added');
    }
    public function destroy(string $id){
        BukuTamu::destroy('id',$id);
        return redirect('/bukutamu')->with('delete','data has been deleted');
    }
   public function edit(string $id){
    $data = BukuTamu::find($id);
    return view('bukutamu.update',[
        "data" => $data,
        "title" => "update"
    ]);
   }
   public function update(Request $request,string $id){
    $update = $request->validate([
        'no_telp' => 'required',
        'nama' => 'required',
        'pesanan' => 'required'
    ]);

    BukuTamu::where('id',$id)->update($update);
    return redirect('/bukutamu')->with('update','data has been updated');
   }
}
