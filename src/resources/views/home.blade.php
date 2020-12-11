@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="clearfix"></div>

        <div class="container overflow-hidden">
  <div class="row gy-5">
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="dokter">DOKTER</a></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="pasien">PASIEN</a></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="obat">OBAT</a></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="karyawan">KARYAWAN</a></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="penyakit">PENYAKIT</a></div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"> <a href="periksa">PERIKSA</a></div>
    </div>
  </div>
</div>
<br>
<nav class="navbar navbar-primary bg-primary">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
    </div>
@endsection