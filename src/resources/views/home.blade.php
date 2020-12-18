@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="clearfix"></div>

    <nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="5" align="center"><font color="white"><h2>Rumah Sakit Umum</h2></font> </marquee>
</nav>
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('images/rs1.jpg')}}" class="d-block w-100" width="1000" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ url('images/rs2.jpg')}}" class="d-block w-100" width="1000" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ url('images/rs3.jpg')}}" class="d-block w-100" width="1000" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="jumbotron">
<div class="container">
        <a href="{{ route('periksa.form') }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Buat Data Periksa Baru</a>
        <div class="clearfix"></div>

  <div class="row gy-5">
    <div class="col-6">
      <div class="p-3 border bg-light" > <a href="dokter">DOKTER</a></div>
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
    <div class="col-6"> 
  </div>
</div>
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
</div>
@endsection