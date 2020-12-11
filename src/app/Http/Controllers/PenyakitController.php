<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Penyakit;
class PenyakitController extends Controller
{
    //
    public function index(){
        return view('penyakit',[
            "penyakit" =>Penyakit::all()
        ]);
       }
   
       public function simpan(Request $request){
           Penyakit::create([
               "kodepenyakit" => $request->kodepenyakit,
               "namapenyakit" => $request->namapenyakit,
               "jenispenyakit" => $request->jenispenyakit,
           ]);
           return redirect()->route('penyakit.index');
           }
   
           public function hapus($id){
               Penyakit::destroy($id);
               return redirect()->route('penyakit.index');
           }
   
           public function tampil($id){
               $penyakit = Penyakit::find($id);
               return view('penyakit',[
                   "penyakit" => Penyakit::all(),
                   "data" => $penyakit
               ]);
           }
   
           
       public function update(Request $request,$id){
           
           $penyakit = Penyakit::find($id);
   
           $penyakit->kodepenyakit = $request->kodepenyakit;
           $penyakit->namapenyakit = $request->namapenyakit;
           $penyakit->jenispenyakit = $request->jenispenyakit;
           $penyakit->save();
   
           return redirect()->route('penyakit.index');
       }
}
