<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Pasien;


class PasienController extends Controller
{
    //
    public function index(){
        return view('pasien',[
            "pasien" =>Pasien::all()
        ]);
       }
   
       public function simpan(Request $request){
           Pasien::create([
               "nopasien" => $request->nopasien,
               "namapasien" => $request->namapasien,
               "tgllahir" => $request->tgllahir,
               "jeniskelamin" => $request->jeniskelamin,
               "alamat" => $request->alamat,
               "penyakit" => $request->penyakit,
           ]);
           return redirect()->route('pasien.index');
           }
   
           public function hapus($id){
               Pasien::destroy($id);
               return redirect()->route('pasien.index');
           }
   
           public function tampil($id){
               $pasien = Pasien::find($id);
               return view('pasien',[
                   "pasien" => Pasien::all(),
                   "data" => $pasien
               ]);
           }
   
           
       public function update(Request $request,$id){
           
           $pasien = Pasien::find($id);
   
           $pasien->nopasien = $request->nopasien;
           $pasien->namapasien = $request->namapasien;
           $pasien->tgllahir = $request->tgllahir;
           $pasien->jeniskelamin = $request->jeniskelamin;
           $pasien->alamat = $request->alamat;
           $pasien->penyakit = $request->penyakit;
           $pasien->save();
   
           return redirect()->route('pasien.index');
       }
}
