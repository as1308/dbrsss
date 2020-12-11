<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Dokter;

class DokterController extends Controller
{
    //
 
    public function index(){
     return view('dokter',[
         "dokter" =>Dokter::all()
     ]);
    }

    public function simpan(Request $request){
        Dokter::create([
            "kodedokter" => $request->kodedokter,
            "namadokter" => $request->namadokter,
            "tgllahir" => $request->tgllahir,
            "jeniskelamin" => $request->jeniskelamin,
            "alamat" => $request->alamat
        ]);
        return redirect()->route('dokter.index');
        }

        public function hapus($id){
            Dokter::destroy($id);
            return redirect()->route('dokter.index');
        }

        public function tampil($id){
            $dokter = Dokter::find($id);
            return view('dokter',[
                "dokter" => Dokter::all(),
                "data" => $dokter
            ]);
        }

        
    public function update(Request $request,$id){
        
        $dokter = Dokter::find($id);

        $dokter->kodedokter = $request->kodedokter;
        $dokter->namadokter = $request->namadokter;
        $dokter->tgllahir = $request->tgllahir;
        $dokter->jeniskelamin = $request->jeniskelamin;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->route('dokter.index');
    }
}
