<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Periksa;

class PeriksaController extends Controller
{
    //
    public function index(){
        return view('periksa',[
            "periksa" =>Periksa::all()
        ]);
       }
   
       public function simpan(Request $request){
           Periksa::create([
               "nopasien" => $request->nopasien,
               "kodedokter" => $request->kodedokter,
               "kodepenyakit" => $request->kodepenyakit,
               "kodepegawai" => $request->kodepegawai,
               "kodeobat" => $request->kodeobat,
               "tglperiksa" => $request->tglperiksa,
               "biayadokter" => $request->biayadokter,
               "biayadaftar" => $request->biayadaftar
           ]);
           return redirect()->route('periksa.index');
           }
   
           public function hapus($id){
               Periksa::destroy($id);
               return redirect()->route('periksa.index');
           }
   
           public function tampil($id){
               $periksa = Periksa::find($id);
               return view('periksa',[
                   "periksa" => Periksa::all(),
                   "data" => $periksa
               ]);
           }
   
           
       public function update(Request $request,$id){
           
           $periksa = Periksa::find($id);
   
           $periksa->nopasien = $request->nopasien;
           $periksa->kodedokter = $request->kodedokter;
           $periksa->kodepenyakit = $request->kodepenyakit;
           $periksa->kodeobat = $request->kodeobat;
           $periksa->tglperiksa = $request->tglperiksa;
           $periksa->biayadokter = $request->biayadokter;
           $periksa->biayadaftar = $request->biayadaftar;
           $periksa->save();
   
           return redirect()->route('periksa.index');
       }
}
