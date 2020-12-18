@extends('layouts.app')

@section('content')
<div cvlass="jumbotron">
<div class="container">
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="5" align="center"><font color="white"><h2>Ini Adalah Halaman Periksa</h2></font> </marquee>
</nav>
    <div class="container">
        <form action="{{ route("periksa.create") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nopasien">No Pasien</label>
                <input type="text" 
                    class="form-control @error('nopasien') is-invalid @enderror" 
                    name="nopasien"
                    placeholder="isi no pasien"
                    value={{ old('nopasien')}}>
                @error('nopasien')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="kodedokter">Kode Dokter</label>
                <input type="text" name="kodedokter" 
                    class="form-control @error('kodedokter') is-invalid @enderror"
                    placeholder="isi kode dokter"
                    value={{ old('kodedokter') }}>
                @error('kodedokter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="kodepenyakit">Kode Penyakit</label>
                <input type="text" name="kodepenyakit" 
                    class="form-control @error('kodepenyakit') is-invalid @enderror"
                    placeholder="isi kode penyakit"
                    value={{ old('kodepenyakit') }}>
                @error('kodepenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="kodepegawai">Kode Pegawai</label>
                <input type="text" name="kodepegawai" 
                    class="form-control @error('kodepegawai') is-invalid @enderror"
                    placeholder="isi kode pegawai"
                    value={{ old('kodepegawai') }}>
                @error('kodepegawai')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="kodeobat">Kode Obat</label>
                <input type="text" name="kodeobat" 
                    class="form-control @error('kodeobat') is-invalid @enderror"
                    placeholder="isi kode obat"
                    value={{ old('kodeobat') }}>
                @error('kodeobat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="form-group">
                <label for="tglperiksa">Tanggal Periksa</label>
                <input type="date" name="tglperiksa" 
                    class="form-control @error('tglperiksa') is-invalid @enderror"
                    placeholder="isi tahun-bulan-tanggal"
                    value={{ old('tglperiksa') }}>
                @error('tglperiksa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>

            <div class="form-group">
    <label for="biayadokter">Biaya Dokter</label>
    <input type="text" name="biayadokter" class="form-control" placeholder="isi biaya dokter"
    value={{  isset($data)?$data->biayadokter:""}}>
    </div>
    
    <div class="form-group">
    <label for="biayadaftar">Biaya Berobat</label>
    <input type="text" name="biayadaftar" class="form-control" placeholder="isi biaya berobat"
    value={{  isset($data)?$data->biayadaftar:""}}>
    </div>
    
            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">
                    <i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger float-right"><i class="fas fa-undo"></i> Batal </a>
            </div>    
<br>
   
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
        </form>
    </div>
@endsection