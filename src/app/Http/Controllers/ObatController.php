<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Obat;

class ObatController extends Controller
{
    //
    public function index(){
        return view('obat',[
            "obat" =>Obat::all()
        ]);
       }
   
       public function simpan(Request $request){
           Obat::create([
               "kodeobat" => $request->kodeobat,
               "namaobat" => $request->namaobat,
               "jenisobat" => $request->jenisobat,
               "hargaobat" => $request->hargaobat
           ]);
           return redirect()->route('obat.index');
           }
   
           public function hapus($id){
               Obat::destroy($id);
               return redirect()->route('obat.index');
           }
   
           public function tampil($id){
               $obat = Obat::find($id);
               return view('obat',[
                   "obat" => Obat::all(),
                   "data" => $obat
               ]);
           }
   
           
       public function update(Request $request,$id){
           
           $obat = Obat::find($id);
   
           $obat->kodeobat = $request->kodeobat;
           $obat->namaobat = $request->namaobat;
           $obat->jenisobat = $request->jenisobat;
           $obat->hargaobat = $request->hargaobat;
           $obat->save();
   
           return redirect()->route('obat.index');
       }
}
