@extends('layouts.app')

@section('content')
<div class="container">
<div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#dokter">Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pasien">Pasien</a>
            </li>
        </ul>
    </div>

    <div class="jumbotron bg-success text-white">
    <h1>periksa</h1>
    <h5>nama pasien</h5>
    <p> kode dokter : xxxx</p>
    </div>

    <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" role="tabpanel" id="dokter">
                <h2> ini adalah halaman dokter </h2>
                <a href="" class="btn btn-outline-success float-right">Buat Periksa</a>
                @include('dokter.tampil')
            </div>
           
     <div class="tab-pane fade" role="tabpanel" id="pasien">
                <h2> ini adalah halaman pasien </h2>
                @include('pasien.tampil')
            </div>
        </div>

</div>
@endsection
