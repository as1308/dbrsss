<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Periksa;

class PeriksaController extends Controller
{
    
      public function tampillist(){
        return view("periksa.list");
    }


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
   
           /*public function tampil($id){
               $periksa = Periksa::find($id);
               return view('periksa',[
                   "periksa" => Periksa::all(),
                   "data" => $periksa
               ]);
           }*/
   
           
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

       public function tampilform(){
        return view("periksa.form");
    }

    public function buatperiksa(Request $request){

        $request->validate([
            // rule validation
            "nopasien" => "required|max:10",
            "kodedokter" => "required|max:10",
            "kodepenyakit" => "required|max:10",
            "kodepegawai" => "required|max:10",
            "kodeobat" => "required|max:10",
            "tglperiksa" => "required|max:10",
            "biayadokter" => "required|max:10",
            "biayadaftar" => "required|max:10"
        ]);

        \App\Models\Periksa::create([
            "nopasien" => $request->nopasien,
            "kodedokter" => $request->kodedokter,
            "kodepenyakit" => $request->kodepenyakit,
            "kodepegawai" => $request->kodepegawai,
            "kodeobat" => $request->kodeobat,
            "tglperiksa" => $request->tglperiksa,
            "biayadokter" => $request->biayadokter,
            "biayadaftar" => $request->biayadaftar
        ]);

        return redirect()->route("home")->with("info","Berhasil Buat Periksa"); //mengembalikan user ke tampilan home
    }

    
}
