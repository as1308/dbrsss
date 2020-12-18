<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
</head>
<body>

<form action="{{  isset($data)
                        ?route('periksa.update',['id' => $data->id])
                        :route('periksa.simpan') }}" method="POST">
  @csrf
  <div class="container">
<div cvlass="jumbotron">
<div class="container">
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="5" align="center"><font color="white"><h2>Ini Adalah Halaman Periksa</h2></font> </marquee>
</nav>

<div class="container">
  <div class="form-group">
    <label for="nopasien">No Pasien</label>
    <input type="text" name="nopasien" class="form-control" placeholder="isi no pasien"
    value={{  isset($data)?$data->nopasien:""}}>
  </div>

  <div class="form-group">
    <label for="kodedokter">Kode Dokter</label>
    <input type="text" name="kodedokter" class="form-control" placeholder="isi kode dokter"
    value= {{  isset($data)?$data->kodedokter:""}}>
  </div>

  <div class="form-group">
    <label for="kodepenyakit">Kode Penyakit</label>
    <input type="text" name="kodepenyakit" class="form-control" placeholder="isi kode penyakit"
    value={{  isset($data)?$data->kodepenyakit:""}}>
    </div>
  <div class="form-group">
    <label for="kodepegawai">Kode Pegawai</label>
    <input type="text" name="kodepegawai" class="form-control" placeholder="isi kode pegawai"
    value={{  isset($data)?$data->kodepegawai:""}}>
    </div>

    <div class="form-group">
    <label for="kodeobat">Kode Obat</label>
    <input type="text" name="kodeobat" class="form-control" placeholder="isi kode obat"
    value={{  isset($data)?$data->kodeobat:""}}>
    </div>

    <div class="form-group">
    <label for="tglperioksa">Tgl Periksa</label>
    <input type="date" name="tglperiksa" class="form-control" placeholder="isi tanggal periksa"
    value={{  isset($data)?$data->tglperiksa:""}}>
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
  <button type="submit" class="btn btn-info" value="simpan">Submit</button><br>
  <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"> Back </i></a>
   </div>

   <nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
</form>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>No Pasien</th>
                <th>Kode Dokter</th>
                <th>Kode Penyakit</th>
                <th>Kode Pegawai</th>
                <th>Kode Obat</th>
                <th>Tanggal Periksa</th>
                <th>Biaya Dokter</th>
                <th>Biaya Daftar</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periksa as $item)
                <tr>
                    <td>{{ $item->nopasien }}</td>
                    <td>{{ $item->kodedokter }}</td>
                    <td>{{ $item->kodepenyakit }}</td>
                    <td>{{ $item->kodepegawai }}</td>
                    <td>{{ $item->kodeobat }}</td>
                    <td>{{ $item->tglperiksa }}</td>
                    <td>{{ $item->biayadokter }}</td>
                    <td>{{ $item->biayadaftar }}</td>
                    <td> <a href="{{ route('periksa.tampil',['id' => $item->id]) }}" 
                        class="btn btn-warning btn-block">Rubah</a></td>
                    <td> <a href="{{ route('periksa.hapus',['id' => $item->id]) }}" 
                        class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
  </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>