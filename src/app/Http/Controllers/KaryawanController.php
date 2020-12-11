<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    public function index(){
        return view('karyawan',[
            "karyawan" =>Karyawan::all()
        ]);
       }
   
       public function simpan(Request $request){
           Karyawan::create([
               "kodepegawai" => $request->kodepegawai,
               "namapegawai" => $request->namapegawai,
               "tgllahir" => $request->tgllahir,
               "jeniskelamin" => $request->jeniskelamin,
               "alamat" => $request->alamat
           ]);
           return redirect()->route('karyawan.index');
           }
   
           public function hapus($id){
               Karyawan::destroy($id);
               return redirect()->route('karyawan.index');
           }
   
           public function tampil($id){
               $karyawan = Karyawan::find($id);
               return view('karyawan',[
                   "karyawan" => Karyawan::all(),
                   "data" => $karyawan
               ]);
           }
   
           
       public function update(Request $request,$id){
           
           $karyawan = Karyawan::find($id);
   
           $karyawan->kodepegawai = $request->kodepegawai;
           $karyawan->namapegawai = $request->namapegawai;
           $karyawan->tgllahir = $request->tgllahir;
           $karyawan->jeniskelamin = $request->jeniskelamin;
           $karyawan->alamat = $request->alamat;
           $karyawan->save();
   
           return redirect()->route('karyawan.index');
       }
}
