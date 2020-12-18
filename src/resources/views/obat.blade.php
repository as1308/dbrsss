<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
</head>
<body>

<form action="{{  isset($data)
                        ?route('obat.update',['id' => $data->id])
                        :route('obat.simpan') }}" method="POST">
@csrf
<div class="container">
<div cvlass="jumbotron">
<div class="container">
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="5" align="center"><font color="white"><h2>Ini Adalah Halaman Obat</h2></font> </marquee>
</nav>
<div class="container">
  <div class="form-group">
    <label for="kodepeobat">Kode Obat</label>
    <input type="text" name="kodeobat" class="form-control" placeholder="isi kode obat" maxlength="10"
    value={{  isset($data)?$data->kodeobat:""}}>
  </div>

  <div class="form-group">
    <label for="namaobat">Nama Obat</label>
    <input type="text" name="namaobat" class="form-control" placeholder="isi nama obat" maxlength="100"
    value={{  isset($data)?$data->namaobat:""}}>
  </div>

  <div class="form-group">
    <label for="jenisobat">Jenis Obat</label>
    <input type="text" name="jenisobat" class="form-control" placeholder="isi jenis obat"
    value={{  isset($data)?$data->jenisobat:""}}>
    </div>

  <div class="form-group">
    <label for="hargaobat">Harga Obat</label>
    <input type="text" name="hargaobat" class="form-control" placeholder="isi harga obat"
    value={{  isset($data)?$data->hargaobat:""}}>
    </div>

    <div class="form-group">
  <button type="submit" class="btn btn-primary" value="simpan">Submit</button><br>
  <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Back </a>

   </div>

<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
</form>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Harga Obat</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $item)
                <tr>
                    <td>{{ $item->kodeobat }}</td>
                    <td>{{ $item->namaobat }}</td>
                    <td>{{ $item->jenisobat }}</td>
                    <td>{{ $item->hargaobat }}</td>
                    <td> <a href="{{ route('obat.tampil',['id' => $item->id]) }}" 
                        class="btn btn-warning btn-block">Rubah</a></td>
                    <td> <a href="{{ route('obat.hapus',['id' => $item->id]) }}" 
                        class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>