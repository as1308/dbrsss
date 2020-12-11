<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyakit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
</head>
<body>


<form action="{{  isset($data)
                        ?route('penyakit.update',['id' => $data->id])
                        :route('penyakit.simpan') }}" method="POST">
  @csrf
<div class="container">
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand"><h2>Halaman Penyakit</h2></a>
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="dokter">Dokter<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="karyawan">Karyawan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="obat">Obat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pasien">Pasien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="penyakit">Penyakit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="periksa">periksa</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
  <div class="form-group">
    <label for="kodepenyakit">Kode Penyakit</label>
    <input type="text" name="kodepenyakit" class="form-control" placeholder="isi kode penyakit" maxlength="10"
    value={{  isset($data)?$data->kodepenyakit:""}}>
  </div>

  <div class="form-group">
    <label for="namapenyakit">Nama Penyakit</label>
    <input type="text" name="namapenyakit" class="form-control" placeholder="isi nama penyakit"maxlength="100"
    value={{  isset($data)?$data->namapenyakit:""}}>
  </div>

  <div class="form-group">
    <label for="jenispenyakit">Jenis Penyakit</label>
    <input type="text" name="jenispenyakit" class="form-control" placeholder="isi jenis penyakit"
    value={{  isset($data)?$data->jenispenyakit:""}}>
    </div>

    <div class="form-group">
  <button type="submit" class="btn btn-primary" value="simpan">Submit</button><br>
   </div>

   <nav class="navbar navbar-primary bg-primary">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
</form>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Jenis Penyakit</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyakit as $item)
                <tr>
                    <td>{{ $item->kodepenyakit }}</td>
                    <td>{{ $item->namapenyakit }}</td>
                    <td>{{ $item->jenispenyakit }}</td>
                    <td> <a href="{{ route('penyakit.tampil',['id' => $item->id]) }}" 
                        class="btn btn-warning btn-block">Rubah</a></td>
                    <td> <a href="{{ route('penyakit.hapus',['id' => $item->id]) }}" 
                        class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
  </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>